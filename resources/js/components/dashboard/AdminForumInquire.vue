<template>
  <div class="">
    <h3>Forum Inquires</h3>
    <div class="col-md-12 mB-10 col-sm-12">
      <input type="date" v-model="dateRange.fromDate" @change="dateFilter" />
      To
      <input type="date" v-model="dateRange.toDate" @change="dateFilter" />
    </div>
    <div class="col-md-12">
      <canvas id="myforumChart" width="600" height="350"></canvas>
    </div>
  </div>
</template>

<script>
import client from "@/client";
export default {
  name: "admin-forum-inquire",
  components: {},
  data() {
    return {
      dateRange: {
        fromDate: "",
        toDate: new Date().toISOString().substr(0, 10)
      },
      forumInquires: "",
      myChart: ""
    };
  },
  mounted() {
    this.setFromDate();
    this.getReport();
  },
  methods: {
    setFromDate() {
      let currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() - 1);
      this.dateRange.fromDate = currentDate.toISOString().substr(0, 10);
    },
    getReport() {
      client
        .get(
          window.location.origin +
            "/api/get-forum-inquire" +
            "?fromDate=" +
            this.dateRange.fromDate +
            "&toDate=" +
            this.dateRange.toDate
        )
        .then(response => {
          this.forumInquires = response.data;
          this.generateReport();
        });
    },
    dateFilter() {
      if (typeof this.myChart != "undefined") {
        this.myChart.destroy();
      }
      this.getReport();
    },
    generateReport() {
      var ctx = document.getElementById("myforumChart").getContext("2d");
      this.myChart = new Chart(ctx, {
        type: "horizontalBar",
        data: {
          labels: Object.keys(this.forumInquires),
          barThickness: 4,
          datasets: [
            {
              label: "# Inquires with the date frame",
              data: Object.values(this.forumInquires),
              backgroundColor: [
                "#ff2052",
                "#cd20ff",
                "#52ff20",
                "#2052ff",
                "#ffcd20",
                "#20ffcd",
                "#ff5e20",
                "#ff20c1",
                "#c1ff20",
                "#001047",
                "#947300",
                "#005918",
                "#590041",
                "#161e00"
              ],
              borderColor: [
                "#ff2052",
                "#cd20ff",
                "#52ff20",
                "#2052ff",
                "#ffcd20",
                "#20ffcd",
                "#ff5e20",
                "#ff20c1",
                "#c1ff20",
                "#001047",
                "#947300",
                "#005918",
                "#590041",
                "#161e00"
              ],
              borderWidth: 2
            }
          ]
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true
                }
              }
            ],
            xAxes: [
              {
                ticks: {
                  beginAtZero: true
                }
              }
            ]
          }
        }
      });
    }
  }
};
</script>

