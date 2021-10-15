<div class="mainexamarea-content">
    <div class="row">
        <div class="col-lg-3">
            <div class="casestudy caseStudyItem" id="CSBX3">
                <h1>Case Study: 3 </h1>
                <h3>Mix Questions</h3>
            </div>
            <div class="accordion_main">
                <button class="accordion">Mix Questions</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 2</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 3</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

            </div>
        </div>
        <div class="col-lg-9">
            <div class="examarea_main">
                <div class="fullwidth innermainexamarea">
                    <!--<h3>Question No. 2</h3>-->
                    <h2>Question No. <span id="CurrentQNo">{{ $questionNo }}</span> <small> / Out of {{$noOfQuestions ?? ''}}<span id="totalQNoCS"></span><span style="display:none;" id="totalQNo">5</span></small></h2>

                    <label class="checkbox-inline markLabel">
                        <input class="markcheck marked-question" {{ isQuestionMarked($attemptID, $extractedQuestion['question_id']) ? 'checked' : '' }} type="checkbox" data-question-id="{{$extractedQuestion['question_id']}}">
                        <span>Marked</span>
                        <span class="checkmark first-checkmark" ></span>
                    </label>
                </div>
                <div class="answerareabox mainquestion">
                    <h3>Question Type: SingleChoice</h3>
                    {!! $extractedQuestion['question'] !!}

                    <div class="answerBox">
                        <div class="answerBox">
                            <input type="hidden" value="{{$extractedQuestion['question_id']}}" class="current_question_id">
                            @php
                                $answers = getQuestionAnswers($extractedQuestion['question_id']);
                                $i = 1;
                            @endphp
                            <h4><strong>You Options: </strong></h4>
                            @forelse($answers as $answer)
                                @php
                                    if ($i == 1) {
                                        $option = 'A';
                                        if ($answer['status']) {
                                            $correctAnswer = 'A';
                                        }
                                    } else if ($i == 2) {
                                        $option = 'B';
                                        if ($answer['status']) {
                                            $correctAnswer = 'B';
                                        }
                                    } else if ($i == 3) {
                                        $option = 'C';
                                        if ($answer['status']) {
                                            $correctAnswer = 'C';
                                        }
                                    } else if ($i == 4) {
                                        $option = 'D';
                                        if ($answer['status']) {
                                            $correctAnswer = 'D';
                                        }
                                    }
                                @endphp
                                <div class="radio">
                                    <label>
                                        <input {{ getUserAlreadyAttemptedAnswers($attemptID, $extractedQuestion['question_id']) == $answer['text'] ? 'checked' : ''}} class="selected-answer" type="radio" name="answer" value="{{$answer['text']}}">
                                        <span class="checkmark">{{ $option }}</span>
                                        <span>{{ $answer['text'] }}<br></span>
                                        <!--<span class="checkmark"></span>-->
                                    </label>
                                </div>
                                @php
                                    $i++;
                                @endphp
                            @empty
                            @endforelse
                        </div>

                        <div class="correctAnswers hideThis" style="display: none"><div class="mainAnswer">
                                <span class="AnsTxt">Answer:</span>
                                <span>{{ $correctAnswer ?? ''}}</span></div><hr>
                            <div class="explainarea">
                                <span class="AnsTxt">Explanation:</span> <br>
                            </div>
                        </div>

                        <input type="hidden" id="correctAnswer" value="C">
                        <div class="afteranswerdiv">
                            <div class="newclass"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>