    $(document).ready(function() {
  
      $( ".accordion" ).accordion({
        collapsible: true
      });
      
      $(".DragImage .sourceBox").draggable();
      $(".DragImage .targetBox").droppable({
        drop: function( event, ui ) {
          //$( this ).addClass( "ui-state-highlight" );
      var clsName = event.originalEvent.target.className;
      console.log($(this).attr('class'));
      console.log('Dragable Class ='+clsName);
      $(this).attr('id',clsName);
          //$( this ).addClass( "ui-state-highlight" ).find( "p" ).html( "Dropped!" );
        }
      });
    
    var question_type = $('#question_type').val();
    if(question_type == 'Hotspot')
    {
      var hotspotImageHTML = $('.HotImage').html();
      $('.hotspotAnswerBox').html(hotspotImageHTML);
    }
    
    var question_type = $('#question_type').val();
    if(question_type == 'DragDrop')
    {
      var dragDropAnswerBox = $('.DragImage').html();
      $('.dragDropAnswerBox').html(dragDropAnswerBox);
      
      var targetCounterANS = 1;
      $(".dragDropAnswerBox .targetBox").each(function() {
        
        var thisClass = $(this).attr('class');
        thisClass = thisClass.replace(" ui-droppable","");
        thisClass = thisClass.replace("targetBox ","");
        thisClass = thisClass.replace("target_","");
        
        var styleCSS = $(this).attr('style');
        
        var targetCounterSB = 1;
        $(".dragDropAnswerBox .SB_"+thisClass).each(function() {
          $(this).addClass('SB_'+thisClass+'_'+targetCounterSB);
          targetCounterSB++;
        })
        
        $('.dragDropAnswerBox .SB_'+thisClass+'_'+targetCounterANS).attr('style',styleCSS);
        
      targetCounterANS++;
      })
    }
    
    
    $('.markcheck').click(function(){
      var current_mark = $(this).attr('id');
      var curr_question = current_mark.replace("_mark", "");
      curr_question = curr_question.replace("QN_", "");
      console.log(current_mark);
      console.log(curr_question);
      var num = $('#QN_'+curr_question+' #CurrentQNo').html();
      var current_q_rev = current_mark.replace("_mark", "_rev");
      
      $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        //swiper.slideNext();
        //swiper.slidePrev();
      
      if(!($('.examscountinnserarea ul #QN_'+curr_question+'_rev').length))
        {
            $('.examscountinnserarea ul').append('<li><div onclick="return gotoQuestion(\''+curr_question+'\');" id="QN_'+curr_question+'_rev" numid="'+num+'" class="revQItem" >'+num+'</div></li>');
        }
      
      if($('#'+current_mark).is(":checked"))
      {
  
        $('.swiper-slide #'+current_q_rev).removeClass('completed');
        $('.swiper-slide #'+current_q_rev).addClass('marked');
        
        $('ul li #'+current_q_rev).removeClass('completed');
        $('ul li #'+current_q_rev).addClass('marked');
      }
      else
      {
        $('.swiper-slide #'+current_q_rev).removeClass('marked');
        $('ul li #'+current_q_rev).removeClass('marked');
      }
    })
    
    
    });
    
    
    function gotoQuestion(curr_question){
      console.log(curr_question);
      
      
      if($('#QN_'+curr_question).length)
        {
              $('.swiper-slide').removeClass('activeSlide');
          $('.swiper-slide #QN_'+curr_question+'_rev' ).parent( ".swiper-slide" ).addClass('activeSlide');
        }
        else
        {
            if(!$('.swiper-slide #QN_'+curr_question+'_rev').hasClass('defaultbtn')){
              $('.swiper-slide').removeClass('activeSlide');
              $('.swiper-slide #QN_'+curr_question+'_rev' ).parent( ".swiper-slide" ).addClass('activeSlide');
          }
        }
      
      var num = $('#QN_'+curr_question+'_rev').attr('numid');
      console.log(num);
      var nxt_question_id = $('#NXT_'+curr_question).val();
      var prv_question_id = $('#PRV_'+curr_question).val();
      var newCaseStudy = $('#caseStudyNumber'+curr_question).val();
      console.log(nxt_question_id);
      console.log(prv_question_id);
      console.log(newCaseStudy);
      $.magnificPopup.close();
      
      if($('#QN_'+curr_question).length)
      {
        $('.questionBox').hide();
        $('#QN_'+curr_question).show();
        $('.caseStudyItem').show();
        $('#CSBX'+newCaseStudy).show();
        //$('#CurrentQNo').html(num);
        return false;
      }
      
      //getQuestion(curr_question,'next',nxt_question_id,caseStudy,num);
    }
    
    function endExamwithConfirm(){
        $.confirm({
            title: 'End Exam',
            content: 'Are you sure you want to end the exam?',
            buttons: {
              confirm: {
                text: 'Yes',
                btnClass: 'btn-blue',
                keys: ['enter', 'shift'],
                action: function(){
                  endExam();
                }
              },
              cancel: {
                text: 'No',
                btnClass: 'btn-default',
                keys: ['enter', 'shift'],
                action: function(){
                    //return false;
                }
              }
            }
        });
    }
    
    function fetchQuestion(curr_question,mode,question_id,caseStudy,num){
      if ($('#nextQuestion'+curr_question).hasClass("lastQuestion")) {
        $.confirm({
            title: 'End Exam',
            content: 'Are you sure you want to end the exam?',
            buttons: {
              confirm: {
                text: 'Yes',
                btnClass: 'btn-blue',
                keys: ['enter', 'shift'],
                action: function(){
                  getQuestion(curr_question,mode,question_id,caseStudy,num);
                }
              },
              cancel: {
                text: 'No',
                btnClass: 'btn-default',
                keys: ['enter', 'shift'],
                action: function(){
                    //return false;
                }
              }
            }
        });
    }
    else
    {
        getQuestion(curr_question,mode,question_id,caseStudy,num);
    }
    }
    
    
    function getQuestion(curr_question,mode,question_id,caseStudy,num){
    console.log(curr_question);
    //$('#nextQuestion'+curr_question).attr('disabled','disabled');
    //$('#nextQuestion'+question_id).attr('disabled','disabled');
    
    var swiper = document.querySelector('.swiper-container').swiper;
    $('.swiper-slide').removeClass('activeSlide');
      $('.swiper-slide #QN_'+question_id+'_rev' ).parent( ".swiper-slide" ).addClass('activeSlide');
      var numid = $('.swiper-slide #QN_'+question_id+'_rev' ).attr('numid');
      if(numid > 9)
      {
          console.log("Hello Slide:"+numid);
          swiper.slideNext();
      }
    
    if(!($('.examscountinnserarea ul #QN_'+curr_question+'_rev').length))
    {
        $('.examscountinnserarea ul').append('<li><div onclick="return gotoQuestion(\''+curr_question+'\');" id="QN_'+curr_question+'_rev" numid="'+num+'" class="revQItem" >'+num+'</div></li>');
    }
     
     $('.DragImage img').removeClass('mCS_img_loaded');
     
     var CurrentQNo = $('#QN_'+curr_question+' #CurrentQNo').html();
     var totalQNo = $('#totalQNo').html();
         //alert(totalQNo); 
      //var numItems = $('.examscountinnserarea .swiper-slide').length; 
      //console.log(numItems+" NO OF QS");
     var lastQuestion = false;
    if(question_id == '')
    {
      lastQuestion = true;
      $('#nextQuestion'+curr_question).removeAttr('disabled');
      $('#nextQuestion'+question_id).removeAttr('disabled');
    }
    
    var exam_code = $('#QN_'+curr_question+' #exam_code').val();
    var user_id = $('#QN_'+curr_question+' #user_id').val();
    var attempt_id = $('#QN_'+curr_question+' #attempt_id').val();
    var question_type = $('#QN_'+curr_question+' #question_type').val();
    var correctAnswer = $('#QN_'+curr_question+' #correctAnswer').val();
    
    console.log(user_id);
    console.log(attempt_id);
    console.log(question_type);
    console.log(correctAnswer);
    
    if(question_type == 'SingleChoice')
    {
      if ($("input[name='"+curr_question+"_QA']:checked").val()) {
        
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
        $('ul li #QN_'+curr_question+'_rev').addClass('completed');
      
         var user_answer = $("input[name='"+curr_question+"_QA']:checked").val();
         if(user_answer == correctAnswer)
         {
          var answer_status = 'true';
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
         }
         else
         {
          var answer_status = 'false';
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
         }
      }
      else
      {
          $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
        $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
        
        var answer_status = 'skip';
        var user_answer = '';
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
      }
    }
    else if(question_type == 'MultipleChoice')
    {
      var answers = [];
      $("input[name='"+curr_question+"_QA[]']:checked").each( function () {
         answers.push($(this).val());
      });
      if(answers.length > 0){
          $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
        $('ul li #QN_'+curr_question+'_rev').addClass('completed');
        
        var user_answer = answers.join(", ");
        console.log(correctAnswer);
        console.log(user_answer);
        if(user_answer == correctAnswer)
        {
          var answer_status = 'true';
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
        }
        else
        {
          var answer_status = 'false';
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
        }
      }
      else
      {
          $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
        $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
        
        var answer_status = 'skip';
        var user_answer = '';
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
      }
    }
    else if(question_type == 'DragDrop')
    {
      var errorCheck = 0;
      var counterDrag = 0;
      var user_answer = [];
      var correctAnswer = [];
      
      $("#QN_"+curr_question+" .DragImage .targetBox").each(function() {
        
        var thisID = $(this).attr('id');
        if(thisID)
        {
          thisIDINT = thisID.replace("DragSI_","");
        }
        else
        {
          thisIDINT = '';
        }
        
        
        var thisClass = $(this).attr('class');
        thisClass = thisClass.replace(" ui-droppable","");
        thisClass = thisClass.replace("targetBox ","");
        thisClass = thisClass.replace("target_","");
        thisClass = thisClass.replace("mCS_img_loaded","");
        thisClass = thisClass.replace(" mCS_img_loaded","");
         
        
        
        correctAnswer[counterDrag] = thisClass;
        user_answer[counterDrag] = thisIDINT;
        
        if($(this).hasClass('target_'+thisIDINT))
        {
          
        }
        else
        {
          errorCheck++;
        }
        counterDrag++;
      })
      console.log(counterDrag);
      user_answer_check = user_answer.join(", ");
      user_answer_check = user_answer_check.replace(/,/g, '');
      user_answer_check = user_answer_check.replace(/\s/g, '')
      console.log(user_answer_check);
      
      if(counterDrag > 0 && user_answer_check != '')
      {
          $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
        $('ul li #QN_'+curr_question+'_rev').addClass('completed');
        if(errorCheck == 0)
        {
          var answer_status = 'true';
          user_answer = user_answer.join(", ");
          correctAnswer = correctAnswer.join(", ");
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
        }
        else
        {
          var answer_status = 'false';
          user_answer = user_answer.join(", ");
          correctAnswer = correctAnswer.join(", ");
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
        }
      }
      else
      {
          $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
        $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
        
        var answer_status = 'skip';
        var user_answer = '';
        correctAnswer = correctAnswer.join(", ");
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
      }
      
      
    }
    else if(question_type == 'Hotspot')
    {
      console.log('Hotspot');
      
      
      var mainCounter = 0;
      var checkVariable = 0;
      var countDots = 0;
      
      $("#QN_"+curr_question+" .HotImage .dotClass").each(function() {
          countDots++;
      });
      
      
      
      $("#QN_"+curr_question+" .HotImage .hotAnswerBox").each(function(index) {
        var ansLeft = parseFloat($(this).css("left"));
        var ansTop = parseFloat($(this).css("top"));
        var ansWidth = parseFloat($(this).css("width"));
        var ansHeight = parseFloat($(this).css("height"));
        
        var checkAreaWidth = parseFloat(ansLeft) + parseFloat(ansWidth);
        var checkAreaHeight = parseFloat(ansHeight) + parseFloat(ansTop);
        
        $("#QN_"+curr_question+" .HotImage .dotClass").each(function() {
          var hotSpotTop = $(this).attr('top');
          var hotSpotLeft = $(this).attr('left');
          
          if((hotSpotLeft > ansLeft && hotSpotLeft < checkAreaWidth) && (hotSpotTop > ansTop && hotSpotTop < checkAreaHeight))
          {
            checkVariable++;
          }
        });
      mainCounter++;
      });
      
      console.log(mainCounter);
      console.log(checkVariable);
      console.log(countDots);
      
      if(countDots > 0)
      {
          $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
        $('ul li #QN_'+curr_question+'_rev').addClass('completed');
        
        if(isEqual(mainCounter,checkVariable,countDots))
        {
          var answer_status = 'true';
          var user_answer = countDots;
          var correctAnswer = mainCounter;
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
        }
        else
        {
          var answer_status = 'false';
          var user_answer = countDots;
          var correctAnswer = mainCounter;
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
        }
        
      }
      else
      {
          $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
        $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
        
        var answer_status = 'skip';
        var user_answer = '';
        var correctAnswer = mainCounter;
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
      }
      
      
      //return false;
    }
    else if(question_type == 'OrderList')
    {
      var answers = [];
      var counter = 0;
       $('#orderlist_'+curr_question+' :selected').each(function(){
         answers[counter] = $(this).text();
         counter++;
        });
      console.log(answers);
      correctAnswer = correctAnswer.split(', ');
      
      console.log(answers);
      console.log(correctAnswer);
      if(counter > 0)
      {
          $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
        $('ul li #QN_'+curr_question+'_rev').addClass('completed');
        
        if (JSON.stringify(answers) == JSON.stringify(correctAnswer))
        {
          console.log('Yes Same!');
          var correctAnswer = JSON.stringify(correctAnswer);
          var user_answer = JSON.stringify(answers);
          console.log(JSON.stringify(correctAnswer));
          var answer_status = 'true';
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
        }
        else
        {
          console.log('Not Same!');
          var correctAnswer = JSON.stringify(correctAnswer);
          var user_answer = JSON.stringify(answers);
          console.log(JSON.stringify(correctAnswer));
          var answer_status = 'false';
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
        }
      }
      else
      {
          $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
        $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
        
        var answer_status = 'skip';
        var user_answer = '';
        var correctAnswer = JSON.stringify(correctAnswer);
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
      }
      //return false;
      
    }
    else if(question_type == 'FillInTheBlank')
    {
      
    }
    else if(question_type == 'DropDown')
    {
      var counterDD = 0;
      var userAnsweredDD = 0;
      var wrongAnswer = 0;
      var answers = [];
      var correct_answers = [];
      $("#QN_"+curr_question+" .fullDDTable .ddSelect").each(function(index) {
        var DDSelectID = $(this).attr("id");
        var selectedVal = $('#'+DDSelectID+' :selected').val();
        DDSelectID = DDSelectID.replace("ddSelect_","");
        if(selectedVal)
        {
          var correctAns = $('#ddSelectHidden_'+DDSelectID).val();
          answers.push(selectedVal);
          correct_answers.push(correctAns);
          userAnsweredDD++;
        }
        else
        {
          
        }
        counterDD++;
      })
      
      if(counterDD == userAnsweredDD)
      {
        console.log(answers);
        console.log(correct_answers);
              
              $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
        $('ul li #QN_'+curr_question+'_rev').addClass('completed');
        
        if (JSON.stringify(answers) == JSON.stringify(correct_answers))
        {
          console.log('Yes Same!');
          var correct_answers = correct_answers.join(', ');
          var user_answer = answers.join(', ');
          var answer_status = 'true';
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correct_answers); 
        }
        else
        {
          console.log('Not Same!');
          var correct_answers = correct_answers.join(', ');
          var user_answer = answers.join(', ');
          var answer_status = 'false';
          addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correct_answers); 
        }
      }
      else
      {
          $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
        $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
        
        var answer_status = 'skip';
        var user_answer = '';
        var correct_answers = correct_answers.join(', ');
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correct_answers);
      }
      //return false;
    }
    else if(question_type == 'CorrectText')
    {
      
    }
    
    if($('#QN_'+curr_question+'_mark').is(":checked"))
    {
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
      $('.swiper-slide #QN_'+curr_question+'_rev').addClass('marked');
      $('ul li #QN_'+curr_question+'_rev').addClass('marked');
    }
    
    if(lastQuestion == true)
    {
      endExam();
      //console.log('last Question');
      /*$.magnificPopup.open({
        items: {
        src: '#ReviewBox'
        },
        type: 'inline'
      });
      $('.openReviewPopup').show();
      $(".mfp-content .examcountdiv").mCustomScrollbar();*/
      return false;
    }
    
    
    if($('#QN_'+question_id).length)
    {
      $.magnificPopup.close();
      $('.questionBox').hide();
      var newCaseStudy = $('#caseStudyNumber'+question_id).val();
      
      $('.swiper-slide').removeClass('activeSlide');
      $('#QN_'+question_id+'_rev' ).parent( ".swiper-slide" ).addClass('activeSlide');
      
          if(caseStudy == newCaseStudy)
      {
        $('#QN_'+question_id).show();
      }
      else
      {
        $('#QN_'+question_id).show();
        console.log('#QN_'+question_id);
        $('.caseStudyItem').show();
        $('#CSBX'+newCaseStudy).show();
      }
      
      $('#nextQuestion'+curr_question).removeAttr('disabled');
      $('#nextQuestion'+question_id).removeAttr('disabled');
      return false;
    }
    //return false;
      
    var URL = 'getQuestion.php';
    
    var data = {'previous_question':curr_question,'question_id':question_id,'case_study':caseStudy,'num':num,'mode':mode, 'exam_code':exam_code};
    $(".loadingimg").show();
    $.ajax({
      type: 'POST',
      url: URL,
      data: data,
      dataType: 'html',
      success: function (response) {
        $(".QuestionMainBox").append(response);
        $('.openReviewPopup').show();
        //CurrentQNo = parseInt(CurrentQNo) + 1;
          //$('#QN_'+question_id+' #CurrentQNo').html(CurrentQNo);
        $('#QN_'+question_id+' #totalQNo').html(totalQNo);
        
        
        
        var numItems = $('.questionBox').length;
        var totalNoQuestions = $('#QuestionNoRange').val();
        if(numItems == totalNoQuestions)
        {
            $('#QN_'+question_id+' .nextQuestionBtn').html('End Exam');
            $('#QN_'+question_id+' .nextQuestionBtn').removeClass('btn-primary');
            $('#QN_'+question_id+' .nextQuestionBtn').removeClass('btn-danger');
            $('#QN_'+question_id+' .nextQuestionBtn').removeClass('lastQuestion');
            $('#QN_'+question_id+' .nextQuestionBtn').addClass('btn-danger');
            $('#QN_'+question_id+' .nextQuestionBtn').addClass('lastQuestion');
        }
        
        
        $( ".accordion" ).accordion({
                collapsible: true
              });
        
        
        
        $('.questionBox').hide();
        
        var newCaseStudy = $('#caseStudyNumber'+question_id).val();
        if(caseStudy == newCaseStudy)
        {
          $('#QN_'+question_id).show();
        }
        else
        {
          $('#QN_'+question_id).show();
          console.log('#QN_'+question_id);
          //$('#QN_'+question_id).hide();
          $('.caseStudyItem').show();
          $('#CSBX'+newCaseStudy).show();
        }
        
        $('#QN_'+question_id+' .DragImage .sourceBox').draggable();
        $('#QN_'+question_id+' .DragImage .targetBox').droppable({
          drop: function( event, ui ) {
          var clsName = event.originalEvent.target.className;
          console.log($(this).attr('class'));
          console.log('Dragable Class ='+clsName);
          $(this).attr('id',clsName);
          }
        });
        
        var HotImageIDArray2 = [];
        $("#QN_"+question_id+" .HotImage").each(function() {
          var HotImageID2 = $(this).attr('id');
          HotImageID2 = HotImageID2.replace("HotImage_","");
              
          HotImageIDArray2.push(HotImageID2);
        })
        var HotImageOrig2 = Math.max.apply(null, HotImageIDArray2);
        
        
         //$('.hotAnswerBox').remove();
         $('#QN_'+question_id+' #HotImage_'+HotImageOrig2+' img').click(function (ev) {
            console.log(ev);
            var yxis = ev.offsetY - 4;
            var xxis = ev.offsetX - 5;
            console.log(yxis);
            console.log(xxis);
            var randID = generate(5);
            $('#QN_'+question_id+' #HotImage_'+HotImageOrig2).append(            
              $('<div class="dotClass" id="dotClass'+randID+'" top="'+yxis+'" left="'+xxis+'"></div>').css({
                top: yxis + 'px',
                left: xxis + 'px'
              })              
            );
            $('#QN_'+question_id+' .dotClass').click(function(dc){
               var ItemID = $(this).attr('id');
              $('#QN_'+question_id+' .dotClass#'+ItemID).remove();
            })
          });
          
          $('#QN_'+question_id+' .orderlistSel').multiselect2side({
              selectedPosition: 'right',
              moveOptions: true,
              labelsx: '',
              labeldx: '',
              autoSort: false,
              autoSortAvailable: false
            });
          
          console.log(question_id);
          var question_type = $('#QN_'+question_id+' #question_type').val();
          
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
              DragImageID = DragImageID.replace("DragImage_","");
              
              DragImageIDArray.push(DragImageID);
            })
            var DragImageOrig = Math.max.apply(null, DragImageIDArray);
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
            
            console.log(DragImageIDArray);
            var Aindex = DragImageIDArray.indexOf(DragImageOrig);
            console.log(DragImageIDArray);
            DragImageIDArray.splice(Aindex, 1);
            console.log(DragImageOrig);
            console.log(DragImageIDArray);
            $.each(DragImageIDArray, function( index, value ) {
              $('#DragImage_'+value+' .targetBox').remove();
              $('#DragImage_'+value+' .sourceBox').remove();
              $('#DragImage_'+value+' .source_parent').remove();
            });
            
          }
        $(".loadingimg").hide();
        
    //      jQuery(".questionBox").mCustomScrollbar();
        jQuery(".caseStudyItem").mCustomScrollbar();
        
        //jQuery(".HotImage").mCustomScrollbar();
        $('.DragImage img').removeClass('mCS_img_loaded');
        $('a.imageCSA').fancybox();
        
        $('#nextQuestion'+curr_question).removeAttr('disabled');
        $('#nextQuestion'+question_id).removeAttr('disabled');
      },
      
      error: function () {
        console.log('something went wrong please try again');
        $(".loadingimg").hide();
      }
    });
    
    }
    
    
      function previousQuestion(question_id,caseStudy,curr_question_id){
        $('.questionBox').hide();
        $('#QN_'+question_id).show();
        $('.caseStudyMainBox').show();
        $('.caseStudyItem').show();
        $('.QuestionMainBoxBig').show();
        
        var swiper = document.querySelector('.swiper-container').swiper;
        $('.swiper-slide').removeClass('activeSlide');
          $('#QN_'+question_id+'_rev' ).parent( ".swiper-slide" ).addClass('activeSlide');
          swiper.slidePrev();
        
        //var CurrentQNo = $('#QN_'+curr_question_id+' #CurrentQNo').html();
        //CurrentQNo = parseInt(CurrentQNo) - 1;
        //$('#CurrentQNo').html(CurrentQNo);
        console.log('#nextQuestion'+question_id);
        $('#nextQuestion'+question_id).removeAttr('disabled');
        var newCaseStudy = $('#caseStudyNumber'+question_id).val();
    //      if(caseStudy == newCaseStudy)
    //      {
    //        $('.caseStudyItem').hide();
    //        $('#CSBX'+caseStudy).show();
    //      }
    //      else
    //      {
    //        $('.caseStudyItem').hide();
    //        $('#CSBX'+newCaseStudy).show();
    //      }
    }
    
    function toggleShowAnswers(question_id){
      if($('#QN_'+question_id+' .correctAnswers').hasClass('showThis'))
      {
        $('#QN_'+question_id+' .correctAnswers').removeClass('showThis');
        $('#QN_'+question_id+' .correctAnswers').addClass('hideThis');
        $('#showAnswer'+question_id).html('<i class="fa fa-eye"></i> Show Answer');
      }
      else
      {
        $('#QN_'+question_id+' .correctAnswers').removeClass('hideThis');
        $('#QN_'+question_id+' .correctAnswers').addClass('showThis');
        $('#showAnswer'+question_id).html('Hide Answer');
        
        //$('#QN_'+question_id).scrollTop($('#QN_'+question_id)[0].scrollHeight);
      }
    }
    
    
    function isEqual() {
          var val = arguments[0],
              equal = true;
          for (var i = 0; i < arguments.length; i++) {
              equal = (arguments[i] === val);
              if (!equal) return false;
          }
          return equal;
      }
    
    
    function addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer){
      
      var site = $('#site').val();
      var URL = 'addAnswertoQuestion.php';
      var data = {'exam_code':exam_code,'question_id':curr_question,'question_type':question_type,'user_id':user_id,'attempt_id':attempt_id,'user_answer':user_answer,'result':answer_status,'correct_answer':correctAnswer,'site':site};
      $.ajax({
        type: 'POST',
        url: URL,
        data: data,
        dataType: 'json',
        success: function (response) {
          console.log(response);
        },
        error: function () {
          console.log('There is some issue while adding your answer.');
        }
      });
        
        
    }
    
    
    function endExam(){
      $('.QuestionMainBoxBig').hide();
      $('.caseStudyMainBox').hide();
      $('.ExamNoTime').hide();
      $('#ExamResult').show();
      $('.examResultSidebar').show();
      $('#resultNav').show();
      //$("#ExamResult").mCustomScrollbar();
      $.magnificPopup.close();
      
      var exam_code = $('#exam_code').val();
      var exam_set = $('#exam_set').val();
      exam_set = 'Exam '+exam_set;
      var user_id = $('#user_id').val();
      var attempt_id = $('#attempt_id').val();
      var pass_per = $('#pass_per').val();
      var site = $('#site').val();
      var selected_questions = $('#totalQNo').html();
      
      var tHour = $('#tHour').val();
      var tMinutes = $('#tMinutes').val();
      var selected_time = tHour+':'+tMinutes+':59';
      var spend_time = $('#timeRem').html();
        
      var URL = 'getExamResult.php';
      var data = {'exam_code':exam_code,
      'user_id':user_id,
      'exam_set':exam_set,
      'attempt_id':attempt_id,
      'pass_per':pass_per,
      'site':site, 
      'selected_questions': selected_questions,
      'selected_time' : selected_time,
      'spend_time':spend_time
          
      };
      $.ajax({
        type: 'POST',
        url: URL,
        data: data,
        dataType: 'html',
        success: function (response) {
          // console.log(response);
          $("#ExamResult").html(response);
          $('#resultTable').DataTable();
          // $("#ExamResult").mCustomScrollbar();
        },
        error: function () {
          console.log('There is some issue while getting your result.');
        }
      });
    }
    
    $('#resultTable').dataTable( {
    "stripeClasses": [ 'strip1', 'strip2', 'strip3' ]
    } );
    
    
    $(document).ready(function() {
        /* $(window).scroll(function() {
            var height = $(".QuestionMainBox").height();
            if(height > 500){
                $(".QuestionMainBox").css({ 'overflow-y': 'scroll'});
            } else{
                $(".QuestionMainBox").css({ 'overflow-y': 'hidden'});
            }
              
          });  */ 
  
      });
    
    function timeisUp() {
      //Code to be executed when timer expires.
      $.confirm({
        title: 'Time Out!',
        content: 'You have run out of time, Would you like end the exam?',
        buttons: {
          confirm: {
            text: 'Yes',
            btnClass: 'btn-blue',
            keys: ['enter', 'shift'],
            action: function(){
              endExam()
              //$.alert('Something else?');
            }
          },
          cancel: {
            text: 'No',
            btnClass: 'btn-default',
            keys: ['enter', 'shift'],
            action: function(){
              //$.alert('Something else?');
            }
          }
        }
      });
    }
    
    
    function startExam(){
      var QuestionNoRange = $('#QuestionNoRange').val();
      var PassRange = $('#PassRange').val();
      
      $('#pass_per').val(PassRange);
      
      $('#CurrentQNo').html(1);
      $('#totalQNo').html(QuestionNoRange);
      
      var tHour = $('#tHour').val();
      var tMinutes = $('#tMinutes').val();
  
      
      
      if ( $("#CSBX1").length ) {
        
        $('.ExamNoTime').hide();
        $('.ExamStartOptions').hide();
        $('.caseStudyMainBox').hide();
        $('.QuestionMainBoxBig').show();
        $('#CSBX1').show();
      }
      else
      {
        tHour = parseInt(tHour);
        tMinutes = parseInt(tMinutes);
        /*$("#timeRem").countdowntimer({
          'hours' : tHour, 
          'minutes' : tMinutes,
          'timeUp' : timeisUp
        });*/
        
        $('.ExamNoTime').show();
        $('.ExamStartOptions').hide();
        $('.QuestionMainBoxBig').show();
      }
      startFirstQuestion();
    }
    
    function startFirstQuestion(){
      var QuestionNoRange = $('#QuestionNoRange').val();
      var PassRange = $('#PassRange').val();
      var without_timer = $('#without_timer').val();
      $('#pass_per').val(PassRange);
      
      
      $('#CurrentQNo').html(1);
      $('#totalQNo').html(QuestionNoRange);
      
      if(without_timer != 1)
      {
          var tHour = $('#tHour').val();
          var tMinutes = $('#tMinutes').val();
          tHour = parseInt(tHour);
          tMinutes = parseInt(tMinutes);
          $("#timeRem").countdowntimer({
            'hours' : tHour, 
            'minutes' : tMinutes,
            'timeUp' : timeisUp
          });
          $('.ExamNoTime').show();
      }
      else
      {
          $('.timeBox').hide();
      }
      
        
        //$('.caseStudyItem').hide();
        $('.ExamStartOptions').hide();
        $('.QuestionMainBoxBig').show();
        $('.questionBox').show();
    }
    
    
    function showCaseStudy(csID,preQID,currQID,nxtQID)
    {
      var preBtn = '';
      var nxtBtn = '';
      if(preQID)
      {
        preBtn = '<button id="previousQuestion'+preQID+'" onclick="return previousQuestion(\''+preQID+'\');"><span class="fa fa-angle-left"></span></button>';
      }
      if(currQID)
      {
        nxtBtn = '<button id="showQuestion'+currQID+'" onclick="return showCurrQuestion(\''+currQID+'\');">Save & Next</button>';
      }
      
      $('.csActionBtns').html('');
      $('.csActionBtns').append(preBtn);
      $('.csActionBtns').append(nxtBtn);
      $('.questionBox').hide();
      $('.caseStudyItem').hide();
      $('.QuestionMainBoxBig').show();
      $('#CSBX'+csID).show();
    }
    
    
    function showCurrQuestion(currQID){
      
      $('.caseStudyMainBox').hide();
      $('.caseStudyItem').hide();
      $('.QuestionMainBoxBig').show();
      $('#QN_'+currQID).show();
    }
    
    
    
    function showUserQuestionResult(qid){
        console.log(qid);
        $.magnificPopup.open({
            items: {
              src: '#'+qid, // can be a HTML string, jQuery object, or CSS selector
              type: 'inline'
            }
          });
          $('.mfp-content .questionBox').removeAttr('style');
          $('.mfp-content .questionBox').attr('style','width: 80%;margin-left: 10%;background:white;margin-top: 0%');
    }
    
    function showUserQuestionResultAjax(qid,user_id,exam_code,siteurl,site,attempt_id,question_type){
        var question_id  = qid;
        var URL = 'getQuestionDetailAjax.php';
      var data = {'question_id':qid,'user_id':user_id,'exam_code':exam_code,'siteurl':siteurl,'site':site,'attempt_id':attempt_id};
        console.log(qid);
        $.ajax({
          type: 'POST',
          url: URL,
          data: data,
          dataType: 'html',
          success: function (response) {
              console.log(response);
              $.magnificPopup.open({
                    items: {
                      src: '<div>'+response+'</div>',
                      type: 'inline'
                    }
                  });
                  
        
        $('#QN_'+question_id+' .DragImage .sourceBox').draggable();
        $('#QN_'+question_id+' .DragImage .targetBox').droppable({
          drop: function( event, ui ) {
          var clsName = event.originalEvent.target.className;
          console.log($(this).attr('class'));
          console.log('Dragable Class ='+clsName);
          $(this).attr('id',clsName);
          }
        });
        
        var HotImageIDArray2 = [];
        $("#QN_"+question_id+" .HotImage").each(function() {
          var HotImageID2 = $(this).attr('id');
          HotImageID2 = HotImageID2.replace("HotImage_","");
              
          HotImageIDArray2.push(HotImageID2);
        })
        var HotImageOrig2 = Math.max.apply(null, HotImageIDArray2);
        
        $('#QN_'+question_id+' .orderlistSel').multiselect2side({
          selectedPosition: 'right',
          moveOptions: true,
          labelsx: '',
          labeldx: '',
          autoSort: false,
          autoSortAvailable: false
        });
          
          console.log(question_id);
          
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
              DragImageID = DragImageID.replace("DragImage_","");
              
              DragImageIDArray.push(DragImageID);
            })
            var DragImageOrig = Math.max.apply(null, DragImageIDArray);
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
            
            console.log(DragImageIDArray);
            var Aindex = DragImageIDArray.indexOf(DragImageOrig);
            console.log(DragImageIDArray);
            DragImageIDArray.splice(Aindex, 1);
            console.log(DragImageOrig);
            console.log(DragImageIDArray);
            $.each(DragImageIDArray, function( index, value ) {
              $('#DragImage_'+value+' .targetBox').remove();
              $('#DragImage_'+value+' .sourceBox').remove();
              $('#DragImage_'+value+' .source_parent').remove();
            });
            
          }
        $(".loadingimg").hide();
        
    //      jQuery(".questionBox").mCustomScrollbar();
        jQuery(".caseStudyItem").mCustomScrollbar();
        
        //jQuery(".HotImage").mCustomScrollbar();
        $('.DragImage img').removeClass('mCS_img_loaded');
        $('a.imageCSA').fancybox(); 
                  
          },
          error: function () {
            console.log('something went wrong please try again');
          }
        });
        
    }
    