  $(document).ready(function(){
    $('.withouttime input[type="checkbox"]').click(function(){
      if($(this).prop("checked") == true){
        //alert("Checkbox is checked.");
      }
      else if($(this).prop("checked") == false){
        //alert("Checkbox is unchecked.");
      }
    });
      
    $('.qTypes input[type="checkbox"]').click(function(){
      //alert(this.value);
      var totalNumQuestions = 0;
      $('.qTypes input[type="checkbox"]:checked').each(function() {
        var CheckItemVal = $(this).attr('data');
        totalNumQuestions = parseInt(totalNumQuestions) + parseInt(CheckItemVal); 
      }); 
      console.log(totalNumQuestions);
      var halfTotalQs = totalNumQuestions /2;
      halfTotalQs = parseInt(halfTotalQs);
      console.log(halfTotalQs);
      if(halfTotalQs < 1)
      {
        halfTotalQs = 1;
      }
      $('#QuestionNoRange').val(halfTotalQs);
      $('#QuestionNoRange').attr('max',totalNumQuestions);
      $('#show').html('<output name="QuestionNoRangevalue" for="QuestionNoRange">'+halfTotalQs+'</output> / '+totalNumQuestions);
      $('#showss').html("");
      $('#showss').html(totalNumQuestions);
            
      var remainder = totalNumQuestions % halfTotalQs;
      var number = totalNumQuestions / halfTotalQs;
      number = number+'';
      number = number.split('.');
      var endNumber = number[0];
      if(remainder > 0)
      {
        endNumber = parseInt(endNumber) + 1;
      } 
      
      var options = '';
      for (var i = 1; i <= endNumber; i++) {
        if(i == 1)
        {
          var checked= 'checked="checked"';
        }
        else
        {
          var checked= ''; 
        }
        options += '<div class="col-md-2">
          <label class="checkbox-inlines">
            <input '+checked+' type="radio" value="'+i+'" name="exam_set" id="es'+i+'"> 
              Practice Set '+i+'
              <span class="checkmark"></span>
              </label>
            </div>';
      }
      
      $('.examSetsTypes').html(options); 
      //if ($('.qTypes input[type="checkbox"]').not(':checked').length == 0) {
        //$('.hideifSpecific').show();
      //} else {
        //$('.hideifSpecific').hide();
      //} 
            
      if ($('.qTypes input[type="checkbox"]:checked').length == 0) {
        $('#StartExam').attr('disabled','disabled');
      } else {
        $('#StartExam').removeAttr('disabled','disabled');
      } 
    })
          
    $('.qCSTypes input[type="checkbox"]').click(function(){
      if ($('.qCSTypes input[type="checkbox"]').not(':checked').length == 0) {
        $('.hideifSpecific').show();
      } else {
        $('.hideifSpecific').hide();
      } 
            
      if ($('.qCSTypes input[type="checkbox"]:checked').length == 0) {
        $('#StartExam').attr('disabled','disabled');
      } else {
        $('#StartExam').removeAttr('disabled','disabled');
      } 
    })
        
    var question_id = $('#current_qid').val();
    var question_type = $('#question_type').val();
        
    if(question_type == 'Hotspot')
    {
      var HotImageIDArray = [];
      $("#QN_"+question_id+" .HotImage").each(function() {
        var HotImageID = $(this).attr('id');
        HotImageID = HotImageID.replace("HotImage_","");
        HotImageIDArray.push(HotImageID);
      })
      var HotImageOrig = Math.max.apply(null, HotImageIDArray);
      var Hindex = HotImageIDArray.indexOf(HotImageOrig);
      HotImageIDArray.splice(Hindex, 1);
      $.each(HotImageIDArray, function( ind, val ) {
        $('#HotImage_'+val+' .hotAnswerBox').remove();
      });
            
      var hotspotImageHTML = $('#QN_'+question_id+' #HotImage_'+HotImageOrig).html();
      $('#QN_'+question_id+' .hotspotAnswerBox').html(hotspotImageHTML);
    }
          
          
    if(question_type == 'DragDrop')
    {
            
      var DragImageIDArray = [];
      $("#QN_"+question_id+" .DragImage").each(function() {
          
        var DragImageID = $(this).attr('id');
        console.log(DragImageID);
        DragImageID = DragImageID.replace("DragImage_","");
        DragImageIDArray.push(DragImageID);
      })
      var DragImageOrig = Math.max.apply(null, DragImageIDArray);
      console.log("Line 694");
      console.log(DragImageOrig);
            
      var dragDropAnswerBox = $('#QN_'+question_id+' #DragImage_'+DragImageOrig).html();
      $('#QN_'+question_id+' .dragDropAnswerBox').html(dragDropAnswerBox);
            
      var targetCounterANS = 1;
      $("#QN_"+question_id+" .dragDropAnswerBox .targetBox").each(function() {
                  
        var thisClass = $(this).attr('class');
        thisClass = thisClass.replace(" ui-droppable","");
        thisClass = thisClass.replace("targetBox ","");
        thisClass = thisClass.replace("target_","");
                  
        var styleCSS = $(this).attr('style');
                  
        var targetCounterSB = 1;
        $("#QN_"+question_id+" .dragDropAnswerBox .SB_"+thisClass).each(function() {
          $(this).addClass('SB_'+thisClass+'_'+targetCounterSB);
          targetCounterSB++;
        })
                  
          $('#QN_'+question_id+' .dragDropAnswerBox .SB_'+thisClass+'_'+targetCounterANS).attr('style',styleCSS);
          targetCounterANS++;
      })
      var Aindex = DragImageIDArray.indexOf(DragImageOrig);
      DragImageIDArray.splice(Aindex, 1);
      $.each(DragImageIDArray, function( index, value ) {
        $('#DragImage_'+value+' .targetBox').remove();
        $('#DragImage_'+value+' .sourceBox').remove();
        $('#DragImage_'+value+' .source_parent').remove();
      });
    }
  });   
  
  $("#nextbtn").click(function(){
    // alert("clicked")
    $('.mainpills li:nth-child(2)').addClass("active");
    $('.liner2').css("opacity","1");
    $('.tab-content').removeClass("margtop100");
  });
  $('.columnstylings input').on('change', function () {
    var v = $(this).val();
    // $('div').css('font-size', v + 'px')
    $('.columnstylings #show span').html(v);
  });
  $('.columnstyl input').on('change', function () {
    var v = $(this).val();
    // $('div').css('font-size', v + 'px')
    $('.columnstyl #show span').html(v);
  });
  // function updateRangeInput(elem,quesrange) {
  //   $(quesranges).next().html($(quesrange).val());
  // }
  
  //  $("#showAnswer").click(function(){
  //  $(".correctAnswers").toggleClass("hideThis");
  //  })
  
  function updateExamSets(questionsPerSet){
    console.log(questionsPerSet);
    var totalNumQuestions = $('#QuestionNoRange').attr('max');
    var halfTotalQs = questionsPerSet;
    if(halfTotalQs < 1)
    {
      halfTotalQs = 1;
    }
    var remainder = totalNumQuestions % halfTotalQs;
    var number = totalNumQuestions / halfTotalQs;
    number = number+'';
    number = number.split('.');
    var endNumber = number[0];
    if(remainder > 0)
    {
      endNumber = parseInt(endNumber) + 1;
    } 
            
    var options = '';
    for (var i = 1; i <= endNumber; i++) {
      if(i == 1)
      {
        var checked= 'checked="checked"';
      }
      else
      {
        var checked= ''; 
      }
      options += '<div class="col-md-2">
        <label class="checkbox-inlines">
          <input type="radio" '+checked+' value="'+i+'" name="exam_set" id="es'+i+'" disabled> 
          Practice Set '+i+'<span class="checkmark" ></span>
        </label>
      </div>';
    }
    $('.examSetsTypes').html(options); 
  }
  $('#withouttimer').click(function(){
    if($(this).prop("checked") == true){
      $(".shoehidediconexams").css("display","none");
      $(".doThisOnCheck").removeClass("col-lg-8 col-lg-offset-2");
      $(".doThisOnCheck").addClass("col-lg-4 col-lg-offset-4");
    }
    else if($(this).prop("checked") == false){
      $(".shoehidediconexams").css("display","block");
      $(".doThisOnCheck").removeClass("col-lg-4 col-lg-offset-4");
      $(".doThisOnCheck").addClass("col-lg-8 col-lg-offset-2");
    }
  });
    
  // $.removeCookie('checkboxValues', { path: '/' });
  // var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {},
  //     $checkboxes = $(".Questype :checkbox");
  //     // $checkboxes = $(".qTypes :checkbox");

  // $checkboxes.on("change", function() {
  //     $checkboxes.each(function() {
  //         checkboxValues[this.id] = this.checked;
  //     });

  //     localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
  // });

  // // On page load
  // $.each(checkboxValues, function(key, value) {
  //     $("#" + key).prop('checked', value);
  // });
  
  // var cookies = $.cookie();
  // for(var cookie in cookies) {
  //   $.removeCookie(cookie);
  // }
    
