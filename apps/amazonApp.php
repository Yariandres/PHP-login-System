
<section class="container bg-light p-5 shadow-sm rounded">
    <h1 class="text-center mt-5 listing-app my-5 display-4">The World's Most Powerfull Amazon Listing Generator</h1>
    <h3 class="mt-5 lead">Instantly craft a killer title - bullet points - Description for your amazon products</h3>
  <div class="row">
    <div class="col-sm-8">
      
      <h3 class="text-underline my-5 text-primary">Directions:</h3>

      <ul class="list-group">
        <li class="lead">1. Fill in the form bellow and click "Generate" button</li>
        <li class="lead">2. Edit the content to read well if needed</li>
        <li class="lead">3. Upload it to amazon</li>      
      </ul>

    </div>  
  </div>

  <?php
    $input1 = '';
    $input2 = '';
    $input3 = '';
    $input4 = '';
    $input5 = '';
    $input6 = '';
    $input7 = '';
    $input8 = '';
    $input9 = '';
    $input10 = '';
    $input11 = '';
    $input12 = '';
    $input13 = '';
    $input14 = '';
    $input15 = '';
    $input16 = '';
    $input17 = '';
    $input18 = '';
    $input19 = '';
    $input20 = '';

    if(isset($_POST['listing-submit'])) {
      $input1 = $_POST['q1'];
      $input2 = $_POST['q2'];
      $input3 = $_POST['q3'];
      $input4 = $_POST['q4'];
      $input5 = $_POST['q5'];
      $input6 = $_POST['q6'];
      $input7 = $_POST['q7'];
      $input8 = $_POST['q8'];
      $input9 = $_POST['q9'];
      $input10 = $_POST['q10'];
      $input11 = $_POST['q11'];
      $input12 = $_POST['q12'];
      $input13 = $_POST['q13'];
      $input14 = $_POST['q14'];
      $input15 = $_POST['q15'];
      $input16 = $_POST['q16'];
      $input17 = $_POST['q17'];
      $input18 = $_POST['q18'];
      $input19 = $_POST['q19'];
      $input20 = $_POST['q20'];
    }
  ?>
  <!-- FORM  -->
  <form class="rounded" action="" id="listingForm" method="POST">
  <!-- ABOUT THE PRODUCT -->
  <h2 class="my-5 text-primary">About The Product</h2>
    <div class="form-group row">
      <label for="q1" class="col-sm-6 col-form-label"><strong>Q1: Name of the product: 1. What is the name of the product you are selling. </strong><br>(Ex: Kitchen Wooden Spoon 6 set - Cotton Flight Pillow - Iphone Cover)</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q1" id="q1" value="<?php echo htmlentities($input1); ?>" placeholder=" The product name is...">
      </div>
    </div>

    <div class="form-group row mb-4">
      <label for="q2" class="col-sm-6 col-form-label"><strong>Q2: Type of product: What exactly are you selling.</strong><br>(ex: Wooden Spoons - Flight Pillow - Phone Cover)</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q2" id="q2" value="<?php echo htmlentities($input2); ?>" placeholder=" Wooden Spoons">
      </div>
    </div>
    <hr>
    <!-- TARGET AUDIENCE -->
    <h2 class="my-4 text-primary">Target Audience</h2>
    <div class="form-group row">
      <label for="q3" class="col-sm-6 col-form-label"><strong>Q3: Target Audience for this product: (Singular Word)</strong><br> (ex: A Chef - Executive - Iphone Owner)</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q3" id="q3" value="<?php echo htmlentities($input3); ?>" placeholder=" Iphone Owner">
      </div>
    </div>

    <div class="form-group row">
      <label for="q4" class="col-sm-6 col-form-label"><strong>Q4: Target Audience for this product: </strong> <br> (Plural Word) "........ are the target audience" (ex:
        Chefs - Executives - Iphone Owners)</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q4" id="q4" value="<?php echo htmlentities($input4); ?>" placeholder=" Iphone Owners">
      </div>
    </div>

    <hr>
    <!-- KEYWORD THEME -->
    <h2 class="my-4 text-primary">Keyword Theme</h2>
    <div class="form-group row">
      <label for="q5" class="col-sm-6 col-form-label"><strong>Q5: In 2 to 3 words: What are the main area of focus for this product? </strong> <br> (ex: Cook faster - Helps you relax - Iphone protection)</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q5" id="q5" value="<?php echo htmlentities($input5); ?>" placeholder="Sport - Cooking - Beauty">
      </div>
    </div>

    <div class="form-group row">
      <label for="q6" class="col-sm-6 col-form-label"><strong>Q6: How does this product helps, your target audience? </strong>  <br> "This product helps you with ........ Verb ending in "ing")" (ex: Mixing food perfectly everytime - Relaxing in long journeys - Protecting your phone)</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q6" id="q6" value="<?php echo htmlentities($input6); ?>" placeholder=" Protecting your phone...">
      </div>
    </div>

    <hr>
    <!-- BIG PAY OFF -->
    <h2 class="my-4 text-primary">Big Pay Off</h2>
    <div class="form-group row">
      <label for="q7" class="col-sm-6 col-form-label"><strong> Q7: What is the big pay off / Big benefit of the product audience: </strong> <br> "With this amazing product you will finally be able to ........ (Verb word)" (ex: Cook to perfection everytime - Relax on journeys - Protect your phone everyday)</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q7" id="q7" value="<?php echo htmlentities($input7); ?>" placeholder=" Protect your phone everyday...">
      </div>
    </div>

    <div class="form-group row">
      <label for="q8" class="col-sm-6 col-form-label"><strong>Q8: What is your ideal customer's main pressing need: </strong> <br>"My customer really needs to ........ but can't ........" (ex: Needs to cook better but can't fing the right spoon - Needs to relax on flight but can't due to uncomfortable travelling seats - Needs to protect their phone but can't find the right suitable case)</small>
      </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q8" id="q8" value="<?php echo htmlentities($input8); ?>" placeholder=" Protect their...">
      </div>
    </div>

    <div class="form-group row">
      <label for="q9" class="col-sm-6 col-form-label"><strong>Q9: What negative thing / person or circuntances do the think is against them:</strong> <br>"The biggest hurdle you have to overcome is ........(verb starting with "ing")" (ex: getting cheap spoons that will break easily or don't hold up - Cheap pillows
        that are poorly stiched and don't last - A protective cover that actually looks good)</small></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q9" id="q9" value="<?php echo htmlentities($input9); ?>" placeholder=" A protective cover that actually looks good...">
      </div>
    </div>

    <div class="form-group row">
      <label for="q10" class="col-sm-6 col-form-label"><strong>Q10: Why is this hurdle such a big dael for your target audience: </strong> <br>"This hurdle is such a huge deal because ........" (ex: Without the right spoon, cooking will fail miserably - If you don't rest well travelling
        you will look tired and wont feel your-self - without a protective cover you will eventually break your phone)</small>
      </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q10" id="q10" value="<?php echo htmlentities($input10); ?>" placeholder=" Without...">
      </div>
    </div>

    <div class="form-group row">
      <label for="q11" class="col-sm-6 col-form-label"><strong>Q11: How does this hurdle hurts them or keeps them from getting the results the want?</strong> <br>"This hurdle hurts you because you........" (ex: Don't want yourself and family be disappointed with the taste of your food - After travelling for a long time you will be tired and wont look yourself - You will break your phone and be mad at yourself after paying a high bill to fixing your broken phone...)</small></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q11" id="q11" value="<?php echo htmlentities($input11); ?>" placeholder=" You will be mad at yourself after paying...">
      </div>
    </div>

    <div class="form-group row">
      <label for="q12" class="col-sm-6 col-form-label"><strong>Q12: What's an idea your target audience believe is true but is actually completely wrong? </strong> <br>(ex: All cooking spoons are practically the same, so you can just buy the cheapest one - A travelling pillow will not
        support your kneck so you don't need one - Your phone is safe without a cover and you will never drop it)</small>
      </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q12" id="q12" value="<?php echo htmlentities($input12); ?>" placeholder=" You will eventually break your phone...">
      </div>
    </div>

    <hr>
    <!-- one -->
    <h2 class="my-4 text-primary">Features and Benefits</h2>      <!-- one -->
      <div class="form-group row">
      <label for="q13" class="col-sm-6 col-form-label"><strong>Q13: What is #1 feature (what it is) of your product?</strong> <br> (ex: Soft silicon grip
        ergonomic handle that you can use at high tempetures - 100% cotton - liquid silicone)</small></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q13" id="q13" value="<?php echo htmlentities($input13); ?>" placeholder=" liquid silicone...">
      </div>
    </div>

    <div class="form-group row">
      <label for="q14" class="col-sm-6 col-form-label"><strong>Q14: What is the benefit (what it does OR means) of the #1 feature above? </strong> <br> "With the #1 it helps ........ (start with a Verb)" (ex: Cook and mix materials to perfection - Relax and enjoy the journey comfortably - enjoy your phone with a full-body drop protecting cover)</small>
      </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q14" id="q14" value="<?php echo htmlentities($input14); ?>" placeholder=" Enjoy your phone with a full-body drop protecting cover...">
      </div>
    </div>

     <!-- two -->
     <div class="form-group row">
      <label for="q15" class="col-sm-6 col-form-label"><strong>Q15: What is #2 feature (what it is) of your product? </strong> <br> (ex: hygienic utensil - 100% pure memory foam - gell rubber)</small></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q15" id="q15" value="<?php echo htmlentities($input15); ?>" placeholder=" gell rubber...">
      </div>
    </div>

    <div class="form-group row">
      <label for="q16" class="col-sm-6 col-form-label"><strong>Q16: What is the benefit (what it does OR means) of the #2 feature above? </strong> <br> "With the #2 feature you can ........ (start with a Verb)" (ex: Won’t harbor bacteria in hidden crevices - Can better fix your neck
        and relieves neck pain during travel - provides great grip and traction)</small>
      </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q16" id="q16" value="<?php echo htmlentities($input16); ?>" placeholder=" provides great grip and traction...">
      </div>
    </div>

    <!-- three -->
    <div class="form-group row">
      <label for="q17" class="col-sm-6 col-form-label"><strong>Q17: What is #3 feature (what it is) of your product? </strong> <br> (ex: Smooth edges - adjustable rope lock - with Qi wireless charging)</small></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q17" id="q17" value="<?php echo htmlentities($input17); ?>" placeholder=" with Qi wireless charging...">
      </div>
    </div>

    <div class="form-group row">
      <label for="q18" class="col-sm-6 col-form-label"><strong>Q18: What is the benefit (what it does OR means) of the #3 feature above? </strong> <br> "With the #3 help you with........ (start with a Verb)" (ex: Won’t scratch any parts of your kitchen - you can adjust the angle
        and the size of the pillow randomly meeting different neck size requirements - saves you the hassle of dealing with those pesky cables)</small>
      </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q18" id="q18" value="<?php echo htmlentities($input18); ?>" placeholder=" dealing with messy cables...">
      </div>
    </div>

    <!-- four -->
    <div class="form-group row">
      <label for="q19" class="col-sm-6 col-form-label"><strong>Q19: What is #4 feature (what it is) of your product? </strong> <br> (ex: Solid silicone design - Sweat resistant / washable cover - Smooth layer surface)</small></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q19" id="q19" value="<?php echo htmlentities($input19); ?>" placeholder=" Smooth layer surface...">
      </div>
    </div>

    <div class="form-group row">
      <label for="q20" class="col-sm-6 col-form-label"><strong>Q20: What is the benefit (what it does OR means) of the #4 feature above? </strong> <br> "With the #4 feature you can ........ (start with a Verb)" (ex: won’t harbor bacteria or let you down by melting or warping - provides the maximum comfort on your trip - Feels and looks really good)</small>
      </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="q20" id="q20" value="<?php echo htmlentities($input20); ?>" placeholder=" Feels and looks really good...">
      </div>
    </div>
      <hr>

      <!-- BUTTONS -->
    <input type="submit" name="listing-submit" class="btn btn-outline-primary" value="Generate"/>
    <button type="submit" class="btn btn-outline-secondary">Start Again</button>
    
  </form>
</section>

<section class="form-results mt-5 p-5 container rounded shadow-sm bg-light">  
  <div class="input-results ">
    <h2 class="pb-5 lead">Final steps: Browse through the results below, edit and use where is nessesary</h2>
    <div class="list-group">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <?php

            if (isset($_POST['listing-submit'])) {              
              // question 1
              if(!empty($_REQUEST['q1'])) {
                $q1 = $_REQUEST['q1'];    
                echo '<a href="#q1" class="list-group-item list-group-item-action list-group-item-primary"> Q1 <strong>Name of the product: </strong> '.$q1.'</a>';
          
              } else {
                echo '<a href="#q1" class="list-group-item list-group-item-action list-group-item-warning">
                        There is missing information, on the form
                      </a>';
              }

              // question 2
              if(!empty($_REQUEST['q2'])) {
                $q2 = $_REQUEST['q2'];    
                echo '<a href="#q2" class="list-group-item list-group-item-action list-group-item-primary">Q2 <strong> TYPE of product: </strong> '.$q2.'</a>';
          
              } else {
                echo '<a href="#q2" class="list-group-item list-group-item-action list-group-item-warning">Q2 has no input, click here to go there</a>';
              }

              // question 3
              if(!empty($_REQUEST['q3'])) {
                $q3 = $_REQUEST['q3'];    
                echo '<a href="#q3" class="list-group-item list-group-item-action list-group-item-primary">Q3 <strong>Target Audience (SINGULAR): </strong> '.$q3.'</a>';
          
              } else {
                echo '<a href="#q3" class="list-group-item list-group-item-action list-group-item-warning">Q3 has no input, click here to go there</a>';
              }

              // question 4
              if(!empty($_REQUEST['q4'])) {
                $q4 = $_REQUEST['q4'];    
                echo '<a href="#q4" class="list-group-item list-group-item-action list-group-item-primary">Q4 <strong>Target Audience (PLURAR): </strong> '.$q4.'</a>';
          
              } else {
                echo '<a href="#q4" class="list-group-item list-group-item-action list-group-item-warning">Q4 has no input, click here to go there</a>';
              }

              // question 5
              if(!empty($_REQUEST['q5'])) {
                $q5 = $_REQUEST['q5'];    
                echo '<a href="#q5" class="list-group-item list-group-item-action list-group-item-primary">Q5 <strong>Keyword Theme : </strong> '.$q5.'</a>';
          
              } else {
                echo '<a href="#q5" class="list-group-item list-group-item-action list-group-item-warning">Q5 has no input, click here to go there</a>';
              }

              // question 6
              if(!empty($_REQUEST['q6'])) {
                $q6 = $_REQUEST['q6'];    
                echo '<a href="#q6" class="list-group-item list-group-item-action list-group-item-primary">Q6 <strong>How does this help your target audience : </strong>  '.$q6.'</a>';
          
              } else {
                echo '<a href="#q6" class="list-group-item list-group-item-action list-group-item-warning">Q6 has no input, click here to go there</a>';
              }

              // question 7
              if(!empty($_REQUEST['q7'])) {
                $q7 = $_REQUEST['q7'];    
                echo '<a href="#q7" class="list-group-item list-group-item-action list-group-item-primary">Q7 <strong>#1 BIG payoff / big benefit : </strong> '.$q7.'</a>';
          
              } else {
                echo '<a href="#q7" class="list-group-item list-group-item-action list-group-item-warning">Q7 has no input, click here to go there</a>';
              }

              // question 8
              if(!empty($_REQUEST['q8'])) {
                $q8 = $_REQUEST['q8'];    
                echo '<a href="#q8" class="list-group-item list-group-item-action list-group-item-primary">Q8 <strong>Customers main pressing need? : </strong> '.$q8.'</a>';
          
              } else {
                echo '<a href="#q8" class="list-group-item list-group-item-action list-group-item-warning">Q8 has no input, click here to go there</a>';
              }

              // question 9
              if(!empty($_REQUEST['q9'])) {
                $q9 = $_REQUEST['q9'];    
                echo '<a href="#q9" class="list-group-item list-group-item-action list-group-item-primary">Q9 <strong>NEGATIVE person, thing or circumstance (Hurdle)  : </strong> '.$q9.'</a>';
          
              } else {
                echo '<a href="#q9" class="list-group-item list-group-item-action list-group-item-warning">Q9 has no input, click here to go there</a>';
              }

              // question 10
              if(!empty($_REQUEST['q10'])) {
                $q10 = $_REQUEST['q10'];    
                echo '<a href="#q10" class="list-group-item list-group-item-action list-group-item-primary">Q10 <strong>WHY this issue is such a big deal  : </strong> '.$q10.'</a>';
          
              } else {
                echo '<a href="#q10" class="list-group-item list-group-item-action list-group-item-warning">Q10 has no input, click here to go there</a>';
              }
            }    
          ?>
        </div>

        <div class="col-sm-12 col-md-6">
          <?php
            if (isset($_POST['listing-submit'])) {              
              // question 11
              if(!empty($_REQUEST['q11'])) {
                $q11 = $_REQUEST['q11'];    
                echo '<a href="#q11" class="list-group-item list-group-item-action list-group-item-primary"> Q11 <strong>HOW does this issue hurt them from getting results they want?</strong> '.$q11.'</a>';          
              } else {
                echo '<a href="#q11" class="list-group-item list-group-item-action list-group-item-warning">
                        Q11 has no input, click here to go there
                      </a>';
              }

              // question 12
              if(!empty($_REQUEST['q12'])) {
                $q12 = $_REQUEST['q12'];    
                echo '<a href="#q12" class="list-group-item list-group-item-action list-group-item-primary">Q12 <strong>Whats an idea your target audience believes to be true, but is actually completly WRONG?</strong> '.$q12.'</a>';
          
              } else {
                echo '<a href="#q12" class="list-group-item list-group-item-action list-group-item-warning">Q12 has no input, click here to go there</a>';
              }

              // question 13
              if(!empty($_REQUEST['q13'])) {
                $q13 = $_REQUEST['q13'];    
                echo '<a href="#q13" class="list-group-item list-group-item-action list-group-item-primary">Q13 <strong>#1 FEATURE:</strong> '.$q13.'</a>';
          
              } else {
                echo '<a href="#q13" class="list-group-item list-group-item-action list-group-item-warning">Q13 has no input, click here to go there</a>';
              }

              // question 14
              if(!empty($_REQUEST['q14'])) {
                $q14 = $_REQUEST['q14'];    
                echo '<a href="#q14" class="list-group-item list-group-item-action list-group-item-primary">Q14 <strong>BENEFIT:</strong> '.$q14.'</a>';
          
              } else {
                echo '<a href="#q14" class="list-group-item list-group-item-action list-group-item-warning">Q14 has no input, click here to go there</a>';
              }

              // question 15
              if(!empty($_REQUEST['q15'])) {
                $q15 = $_REQUEST['q15'];    
                echo '<a href="#q15" class="list-group-item list-group-item-action list-group-item-primary">Q15 <strong>#2 FEATURE:</strong> '.$q15.'</a>';
          
              } else {
                echo '<a href="#q15" class="list-group-item list-group-item-action list-group-item-warning">Q15 has no input, click here to go there</a>';
              }

              // question 16
              if(!empty($_REQUEST['q16'])) {
                $q16 = $_REQUEST['q16'];    
                echo '<a href="#q16" class="list-group-item list-group-item-action list-group-item-primary">Q16 <strong>BENEFIT:</strong> '.$q16.'</a>';
          
              } else {
                echo '<a href="#q16" class="list-group-item list-group-item-action list-group-item-warning">Q16 has no input, click here to go there</a>';
              }

              // question 7
              if(!empty($_REQUEST['q17'])) {
                $q17 = $_REQUEST['q17'];    
                echo '<a href="#q17" class="list-group-item list-group-item-action list-group-item-primary">Q17 <strong>#3 FEATURE:</strong> '.$q17.'</a>';
          
              } else {
                echo '<a href="#q17" class="list-group-item list-group-item-action list-group-item-warning">Q17 has no input, click here to go there</a>';
              }

              // question 18
              if(!empty($_REQUEST['q18'])) {
                $q18 = $_REQUEST['q18'];    
                echo '<a href="#q18" class="list-group-item list-group-item-action list-group-item-primary">Q18 <strong>BENEFIT:</strong> '.$q18.'</a>';
          
              } else {
                echo '<a href="#q18" class="list-group-item list-group-item-action list-group-item-warning">Q18 has no input, click here to go there</a>';
              }

              // question 19
              if(!empty($_REQUEST['q19'])) {
                $q19 = $_REQUEST['q19'];    
                echo '<a href="#q19" class="list-group-item list-group-item-action list-group-item-primary">Q19 <strong>#4 FEATURE:</strong> '.$q19.'</a>';
          
              } else {
                echo '<a href="#q19" class="list-group-item list-group-item-action list-group-item-warning">Q19 has no input, click here to go there</a>';
              }

              // question 20
              if(!empty($_REQUEST['q20'])) {
                $q20 = $_REQUEST['q20'];    
                echo '<a href="#q20" class="list-group-item list-group-item-action list-group-item-primary">Q20 <strong>BENEFIT:</strong> '.$q20.'</a>';
          
              } else {
                echo '<a href="#q20" class="list-group-item list-group-item-action list-group-item-warning">Q20 has no input, click here to go there</a>';
              }
            }    
          ?>
        </div>          
      </div>
    </div>
  </div>
</section>

<!-- BULLET TITTLE -->
<section class="title-result mt-5 p-5 container rounded shadow-sm bg-light">
  <?php
    if (isset($_POST['listing-submit'])) {
      echo '<h2 class="my-5 text-primary">The title</h2>';

      if(!empty($_REQUEST['q1'])) {
  
        echo '<h4><strong>' . $q1 . '</strong> -  ' . $q5 . ' - ' . $q6 . ' - ' . $q17 . ' to ' . $q7 . '</h4>';

      } else {
        echo '<a href="#q1" class="list-group-item list-group-item-action list-group-item-warning">
                Q1 has no input, click here to go there
              </a>';
      }
    }
  ?> 

  <!-- BULLET POINTS -->
  <div class="p-4">    
      <?php
        if (isset($_POST['listing-submit'])) {
          echo '<h2 class="my-5 text-primary">The bullet points</h2>';

          if(!empty($_REQUEST['q13']) && !empty($_REQUEST['q14'])) {

            // words Emotional State: Urgency 
            $input = array("Simply Magical", "Most Important", "Remarkable Features", "Its Revolutionary", "Clearly Sensational", "a trustworthy bodyguard", "Jackpot", "Instant Savings", "High quality", "Magical", "Never Missing Out", "Magnificent", "Miracle", "very Profitable", "Proven", "quick steps", "Fast Results", "Safe in mind", "Save", "Sensational", "Startling new", "Superb", "Superior", "Tremendous", "Truly", "Worthwhile", "Never Limited", "bargain", "Skyrocket");
            $rand_keys = array_rand($input, 4);
            $rand_one = $input[$rand_keys[0]] . "\n";
            $rand_two = $input[$rand_keys[1]] . "\n";
            $rand_three = $input[$rand_keys[2]] . "\n";
            $rand_four = $input[$rand_keys[3]] . "\n";
            
            echo '<h4 class="bullet-title"><strong>' . $rand_one . '-</strong><span id="bullet-text"> ' . $q13 . '<strong> it helps </strong> ' . $q14 . '<strong> - safe</strong></span></h4>';
      
          } else {
            echo '<a href="#q13" class="list-group-item list-group-item-action list-group-item-warning">
                    Q1 has no input, click here to go there
                  </a>';
          }

          if(!empty($_REQUEST['q15']) && !empty($_REQUEST['q16'])) {             
            echo '<h4 class="bullet-title mt-5"><strong>' .  $rand_two .' -</strong><span id="bullet-text"> ' . $q15 . '<strong> to </strong> ' . $q16 . '<strong> - easily</strong></span></h4>';
      
          } else {
            echo '<a href="#q14" class="list-group-item list-group-item-action list-group-item-warning">
                    Q1 has no input, click here to go there
                  </a>';
          }

          if(!empty($_REQUEST['q17']) && !empty($_REQUEST['q18'])) {             
            echo '<h4 class="bullet-title mt-5"><strong>' .  $rand_three .' -</strong><span id="bullet-text"> ' . $q17 . '<strong> helps to </strong> ' . $q18 . '<strong> - helpful</strong></span></h4>';
      
          } else {
            echo '<a href="#q17" class="list-group-item list-group-item-action list-group-item-warning">
                    Q1 has no input, click here to go there
                  </a>';
          }

          if(!empty($_REQUEST['q18']) && !empty($_REQUEST['q19'])) {             
            echo '<h4 class="bullet-title mt-5"><strong>' .  $rand_four .' -</strong><span id="bullet-text"> ' . $q19 . '<strong> which means </strong> ' . $q20 . '<strong> - Delightful</strong></span></h4>';
      
          } else {
            echo '<a href="#q18" class="list-group-item list-group-item-action list-group-item-warning">
                    Q1 has no input, click here to go there
                  </a>';
          }
        }
      ?>
  </div>  
</section>

 <!-- DESCRIPTION -->
 <section class="section-description mt-5 p-5 container rounded shadow-sm bg-light">

  <div class="p-5">  
      <?php
        if (isset($_POST['listing-submit'])) {
          echo '<h2 class="my-5 text-primary">Description</h2>';

          if(!empty($_REQUEST['q11'])) {             
            echo '<h4 class="mb-4"><span class="mongod" data-container="body" data-toggle="popover" data-placement="top" data-content="Q1: Name of the product">' . $q1 . '</span> is for <span class="mongod" data-container="body" data-toggle="popover" data-placement="top" data-content="Q3: Target audience (singular)">' . $q3 .'</span> who has been looking to ' . '<span class="mongod" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Q5: Keyword Theme">' . $q5 . '</span>' . ' but <span class="mongod" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Q9: Negative thing">' . $q9 . '</span> is difficult.</h4>';

            echo '<h4><span class="mongod" data-container="body" data-toggle="popover" data-placement="top" data-content="Q10: WHY this hurdle is a big deal">' . $q10 . '</span> and <span class="mongod" data-container="body" data-toggle="popover" data-placement="top" data-content="Q11: WHY this hurdle hurts...">' . $q11  . '</span>. What make this even worst is that you really want to ' . $q8 . '<h4>';
            echo '<h4 class="mb-4">What is worst, is that many companies push you to think that ' . $q12 . '.</h4>';
            echo '<h4 class="mb-4">All of this can make buying a ' . $q2 . ' That can help to ' . $q7 . ' a difficult this to do. But luckly for you there is a solution!</h4>';
            echo '<h4 class="mb-4">So if you are ' . $q4 . ' who really wants to ' . $q8 . $q1 . ' is the answer you are looking for!</h4>';
            echo '<h4><strong>Satisfaction Guarantee:</strong> We believe in simplifying great products! Our ' . $q1 . ' is great for all. But if for any reason this ' . $q2 .  ' does not meet your expectations just use our no questions asked money back guarantee.<strong> So Add to Cart Now!</strong></h4>';
      
          } else {
            echo '<a href="#q13" class="list-group-item list-group-item-action list-group-item-warning">
                    Q1 has no input, click here to go there
                  </a>';
          }

        }
      ?>
  </div>

 </section>

<script>
 $(function () {
  $('[data-toggle="popover"]').popover()
})
</script>

