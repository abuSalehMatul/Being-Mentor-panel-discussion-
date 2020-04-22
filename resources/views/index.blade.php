@section('css')
<style >
    .title-des {
        font-size: 14px;
        line-height: 20px;
        font-stretch: ultra-expanded;
        font-style: italic;
        font-variant: full-width;
        text-align: center;
    }

    .whyUsp{
        text-align: left;
    margin: 15px;
    padding: 5px;
    font-size: 16px;
    font-style: italic;
    font-stretch: semi-condensed;
    font-family: cursive;
    font-weight: 800;
    color: brown;
    }
    .howToPic{
        border: 1px solid blueviolet;
        border-radius: 42px;
        height: 146px;
        width: 280px;
        padding: 4px;
        outline: burlywood;
    }

    .howToTitle{
        text-align: center;
    font-size: 30px;
    font-weight: 900;
    padding: 10px;
    color: blue;
    font-family: cursive;
    font-style: oblique;
    }

    .howToPeragraph{
        font-style: italic;
    font-family: cursive;
    text-align: center;
    }
    .parent {
        padding: 10px;
    }

    .box {
        background-color: lightblue;
        color: black;
        font-size: 20px;
        left: -4%;
        padding: 15px;
        top: 1px;
        border: 1px solid blanchedalmond;
        border-radius: 20px;
        position: fixed;
        -webkit-transition-property: width height background-color font-size left top transform -webkit-transform color;
        -webkit-transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-in-out;
        transition-property: width height background-color font-size left top transform -webkit-transform color;
        transition-duration: 0.2s;
        transition-timing-function: ease-in-out;
    }

    .box1 {
        transform: rotate(270deg);
        -webkit-transform: rotate(270deg);
        width: 50px;
        height: 50px;
        background-color: transparent;
        color: ghostwhite;
        opacity: .5;
        font-size: 18px;
        left: 150px;
        top: 25px;
        position: absolute;
        -webkit-transition-property: width height background-color font-size left top transform -webkit-transform color;
        -webkit-transition-duration: 0.5s;
        -webkit-transition-timing-function: ease-in-out;
        transition-property: width height background-color font-size left top transform -webkit-transformv color;
        transition-duration: 0.5s;
        transition-timing-function: ease-in-out;
    }


    .box3 {
        background-color: lightblue;
        color: black;
        font-size: 20px;
        left: -14%;
        padding: 15px;
        top: 17px;
        border: 1px solid blanchedalmond;
        border-radius: 20px;
        position: fixed;
        -webkit-transition-property: width height background-color font-size left top transform -webkit-transform color;
        -webkit-transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-in-out;
        transition-property: width height background-color font-size left top transform -webkit-transform color;
        transition-duration: 0.2s;
        transition-timing-function: ease-in-out;
    }

    .box2 {
        transform: rotate(270deg);
        -webkit-transform: rotate(270deg);
        width: 50px;
        height: 50px;
        background-color: transparent;
        color: ghostwhite;
        opacity: .5;
        font-size: 18px;
        left: 150px;
        top: 25px;
        position: absolute;
        -webkit-transition-property: width height background-color font-size left top transform -webkit-transform color;
        -webkit-transition-duration: 0.5s;
        -webkit-transition-timing-function: ease-in-out;
        transition-property: width height background-color font-size left top transform -webkit-transformv color;
        transition-duration: 0.5s;
        transition-timing-function: ease-in-out;
    }
</style>
@endsection
<div
    class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider">
    <div class="et_pb_row et_pb_row_0">
        <div class="et_pb_column et_pb_column_1_2 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">

            <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">

                <div class="et_pb_text_inner">Being mentors: a pool of experts and learners
                </div>
            </div>
            <!-- .et_pb_text -->
            <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">
                <div class="title-des">
                    <h5 class="animated infinite bounce delay-2s">
                        With the development of information technology, the demand for online
                        coaching and training has got an overwhelming impetus. Now learners want to get guided online
                        through interaction with a mentor. Now mentor want to mastermind a group of trainers through
                        online
                        presence! All education institutions are always searching for an online resource to address the
                        increasing needs of their students. Being a mentor is here to empower academic progress. We
                        facilitate the one on one academic support via our prestigious online platform. We connect the
                        learners and educators and boost educational activities
                        support.
                    </h5>
                </div>
            </div>
            <!-- .et_pb_text -->
        </div>
        <!-- .et_pb_column -->
        <div class="et_pb_column et_pb_column_1_2 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
            <div class="et_pb_module dsm_flipbox dsm_flipbox_0">
                <div class="et_pb_module_inner" onclick="updateTransition()">
                    <div class="dsm-flipbox dsm-flipbox-slide-left">
                        <div
                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_0 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">
                            <div class="et_pb_module_inner">
                                <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                    <h4 class="dsm-title et_pb_module_header">
                                        Academic Mentorship</h4>
                                    <span class="dsm-subtitle">For students &
                                        coaching</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_1 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">
                            <div class="et_pb_module_inner">
                                <div class="dsm_flipbox_wrapper et_pb_text_align_left ">
                                    <span class="">Click for more details</span>
                                    <div class="dsm-content">We provide opportunities, resources, and tools for everyone
                                        related to the education and training field. We assist potential leaders and
                                        researchers in getting expertise in this field. Being mentors facilitates
                                        everyone
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="parent">
                    <div class="box1" style="display:none">
                        <ul>
                            <li> <i>&#10148; Mentors and coaches </i></li>
                            <li> <i>&#10148; Students and learners </i></li>
                            <li> <i>&#10148; Private and public schools </i></li>
                            <li> <i>&#10148; Nonprofit organization </i></li>
                            <li> <i>&#10148; Academic support institutions </i></li>
                            <li> <i>&#10148; Tutoring companies </i></li>
                            <li> <i>&#10148; Knowledge seekers </i></li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="et_pb_module dsm_flipbox dsm_flipbox_1">
                <div class="et_pb_module_inner">
                    <div class="dsm-flipbox dsm-flipbox-slide-left">
                        <div
                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_2 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">

                            <div class="et_pb_module_inner">
                                <div class="dsm_flipbox_wrapper et_pb_text_align_center">
                                    <h4 class="dsm-title et_pb_module_header">
                                        Professionals</h4>
                                    <span class="dsm-subtitle">For students &
                                        coaching</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_3 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">
                            <div class="et_pb_module_inner" onclick="updateTransition1()">
                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">

                                    <div class="dsm-content">If you are a professional and educated trainer, you may
                                        find here the resources to interact with your students and provide assistance
                                        for their daily assignments, school tests, and educational process. Just
                                        register on our website as a mentor and find your potential mentees. Whether you
                                        have an MBA degree or engineering expertise, you will find here opportunities to
                                        be hired. You may help the trainees in
                                        <span class="">Click for more details</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="parent">
                    <div class="box2" style="display:none">
                        <ul>
                            <li> <i>&#10148; Routine academic assignments </i></li>
                            <li> <i>&#10148; Solving the exercises </i></li>
                            <li> <i>&#10148; Writing research papers and thesis </i></li>
                            <li> <i>&#10148; Extensive research </i></li>
                            <li> <i>&#10148; Preparation for admission tests </i></li>
                            <li> <i>&#10148; Teaching textbooks and syllabus completion </i></li>
                            <li> <i>&#10148; Developing curriculum for private education entities </i></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="application/javascript">
    function updateTransition() {
    var el = document.querySelector("div.box1");

  if (el) {
    el.className = "box";
    el.style.display = "block";
  } else {
    el = document.querySelector("div.box");
    el.className = "box1";
    setTimeout(function(){ hideBox(); }, 1000);
  }

  return el;
}
function updateTransition1() {
  var el = document.querySelector("div.box2");

  if (el) {
    el.className = "box3";
    el.style.display = "block";
  } else {
    el = document.querySelector("div.box3");
    el.className = "box2";
    setTimeout(function(){ hideBox1(); }, 1000);
  }

  return el;
}
 function hideBox(){
    let el = document.querySelector("div.box1");
    el.style.display = "none";
 }
 function hideBox1(){
    let el = document.querySelector("div.box2");
    el.style.display = "none";
 }

</script>