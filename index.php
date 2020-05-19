
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get Quote</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<header class="header">
  
</header>
<h1 class="header__title  text-center p-0 my-2">Get Quote</h1>
      <h2 class="content__title p-0 my-3" >Click on steps or 'Prev' and 'Next' buttons</h2>
    <div class="container overflow-hidden">
      <!--multisteps-form-->
      <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-2">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="Moving"></button>
              <button class="multisteps-form__progress-btn" type="button" title="buddies"></button>
              <button class="multisteps-form__progress-btn" type="button" title="Address"></button>
              <button class="multisteps-form__progress-btn" type="button" title="Email"></button>
              <button class="multisteps-form__progress-btn" type="button" title="phone"></button>
              <button class="multisteps-form__progress-btn" type="button" title="home"></button>
              <button class="multisteps-form__progress-btn" type="button" title="Beds"></button>
              <button class="multisteps-form__progress-btn" type="button" title="refrigerator"></button>
              <button class="multisteps-form__progress-btn" type="button" title="Armoire"></button>
              <button class="multisteps-form__progress-btn" type="button" title="Garageandorsheditems"></button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
            <div class="col-12 col-lg-8 m-auto">
              <form class="multisteps-form__form"     method="POST" action="mail.php">
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Lets Begin Your Moving Journey!</h3>
                  <div class="multisteps-form__content">
                    <p>
                      We are happy to move all of your items. To provide you with a precise quote and the best possible experience we
                      need to store some of your information. This information will be used only to build an estimate of your move and
                      could be deleted at any time per your request. It’s absolutely fine if you don’t want to share anything through
                      our form. Give us a call at <a href="tel:844-462-6683" aria-label="Call 844-462-6683."><span class="label">844-462-6683</span></a>
                      and we'll be happy to provide you with a quote over the phone
                    </p>
                   <center><img src="../quote/image/load.png" vertical-align: middle; width="330px">
                    <input type="checkbox" autofocus id="accepted" name="accepted" value="accepted">
                    <label for="accepted"><h6>I am fine, keep the ball rolling!</h6></label></center> 
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary ml-auto js-btn-next" id="first"  type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Let's Be Buddies</h3>
                <div class="multisteps-form__content">
                  <p>We cant wait to meet you! Tell us how can we call you, we will personalize the form for you and move on.</p>
                  <div class="form-row mt-2">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" name="firstName" id="firstName" placeholder="Your First Name"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="text" name="lastName" id="lastName" placeholder="Your Last Name"/>
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" id="second"  type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
                      <!--single form panel-->
        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
          <h3 class="multisteps-form__title">Your Address</h3>
          <div class="multisteps-form__content">
            <div class="form-row mt-4">
              <div class="col">
                <input class="multisteps-form__input form-control" name="address" id="address" type="text" placeholder="Address"/>
              </div>
            </div>
           
            <div class="form-row mt-2">
              <div class="col-12 col-sm-6">
                <input class="multisteps-form__input form-control" name="city" id="city" type="text" id="city" placeholder="City"/>
              </div>
              <div class="col-6 col-sm-3 mt-2 mt-sm-0">
                <select class="multisteps-form__select form-control" name="state" id="state">
                     <option value="default">state</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                  </select>				
              </div>
              <div class="col-6 col-sm-3 mt-2 mt-sm-0">
                <input class="multisteps-form__input form-control" name="zip" id="zip" type="text" placeholder="Zip"/>
              </div>
            </div>
            <div class="button-row d-flex mt-4">
              <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
              <button class="btn btn-primary ml-auto js-btn-next" id="third" type="button" title="Next">Next</button>
            </div>
          </div>
        </div>
 
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Enter Your Email Address</h3>
                <p>You will receive an approximate quote right after you complete the form. In addition we will use this address to follow you up with finalize quote.</p>
                <div class="multisteps-form__content">
                  <input class="multisteps-form__input form-control"  name="email" type="email" id="email" placeholder="Email Address"/>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" id="fourth" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Enter Your Phone Number</h3>
                <p>Sometimes it is more convinent to speak over the phone, what number we could reach you at?</p>
                <div class="multisteps-form__content">
                  <input class="multisteps-form__input form-control" name="number" type="text" id="number" placeholder="Phone Number"/>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" id="fifth" type="button" title="Next">Next</button>
                    </div>
                </div>
              </div>
            </div>
                   <!--single form panel-->
        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Type of move</h3>
                <div class="multisteps-form__content">
                <p>If you need Arnold's to move up to three items,  please select individual item move.  All others please choose the correct size of your home. </p>
                <label for="home">Size of home (choose individual item for one item):</label>
                <select class="multisteps-form__select form-control" name="home" id="home">
                    <option value="Single Family">Single Family</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Individual Item">Individual Item</option>
                    </select>				
                    <label for="floors">Number of floors:</label>
                <select class="multisteps-form__select form-control" name="floors" id="floors">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5 or More">5 or More</option>
                    </select>				
                    <label for="bedrooms">Number of bedrooms:</label>
                <select class="multisteps-form__select form-control" name="bedrooms" id="bedrooms">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4 or More">4 or More</option>
                    </select>		
                  <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next " id="sixth" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
                  <!--single form panel-->
        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">What are we moving</h3>
                <div class="multisteps-form__content">
                <label for="Beds">Number of Beds:</label>
                <select class="multisteps-form__select form-control" name="Beds" id="Beds">
                <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>						
                    <label for="Sizes">Bed Sizes:</label>
                <select class="multisteps-form__select form-control" name="Sizes" id="Sizes">
                    <option value="None">None</option>
                    <option value="Twin">Twin</option>
                    <option value="Full">Full</option>
                    <option value="King">King</option>
                    <option value="Queen">Queen</option>
                    </select>				
                    <label for="TV">Number of TV's:</label>
                <select class="multisteps-form__select form-control" name="TV" id="TV">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Dressers">Number of Dressers:</label>
                <select class="multisteps-form__select form-control" name="Dressers" id="Dressers">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Boxes">Number of Boxes:</label>
                    <p>Please estimate within ten boxes and/or plastic containers as that is the maximum allowed outside of estimate. Additional charges will apply</p>
                <input class="multisteps-form__select form-control" Type="number" name="Boxes" id="Boxes">
                  <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" id="seventh" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
                         <!--single form panel-->
        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Appliances To Move</h3>
                <p>We do not connect or disconnect appliances.</p>
                <div class="multisteps-form__content">
                    <label for="refrigerator">refrigerator:</label>
                <select class="multisteps-form__select form-control" name="refrigerator" id="refrigerator">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Stove">Stove:</label>
                <select class="multisteps-form__select form-control" name="Stove" id="Stove">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Dishwasher">Dishwasher:</label>
                <select class="multisteps-form__select form-control" name="Dishwasher" id="Dishwasher">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Grill">Grill:</label>
                <select class="multisteps-form__select form-control" name="Grill" id="Grill">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Washer">Washer:</label>
                <select class="multisteps-form__select form-control" name="Washer" id="Washer">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Dryer">Dryer:</label>
                <select class="multisteps-form__select form-control" name="Dryer" id="Dryer">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="AirConditioner">Air Conditioner:</label>
                <select class="multisteps-form__select form-control" name="AirConditioner" id="AirConditioner">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="DeepFreezer">Deep Freezer:</label>
                <select class="multisteps-form__select form-control" name="DeepFreezer" id="DeepFreezer">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Microwave">Microwave:</label>
                <select class="multisteps-form__select form-control" name="Microwave" id="Microwave">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Other">Other:</label>
                <select class="multisteps-form__select form-control" name="Other" id="Other">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" id="eighth" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
                <!--single form panel-->
        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">What furniture is moving</h3>
                <div class="multisteps-form__content">
                    <label for="Armoire">Armoire:</label>
                <select class="multisteps-form__select form-control" name="Armoire" id="Armoire">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Couch">Couch (sectional please select other):</label>
                <select class="multisteps-form__select form-control" name="Couch" id="Couch">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Bookcases">Bookcases:</label>
                <select class="multisteps-form__select form-control" name="Bookcases" id="Bookcases">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Cabinets">Cabinets:</label>
                <select class="multisteps-form__select form-control" name="Cabinets" id="Cabinets">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Desks">Desks:</label>
                <select class="multisteps-form__select form-control" name="Desks" id="Desks">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Lamps">Lamps:</label>
                <select class="multisteps-form__select form-control" name="Lamps" id="Lamps">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="EndTables">End Tables:</label>
                <select class="multisteps-form__select form-control" name="EndTables" id="EndTables">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="DiningRoomset">Dining Room set:</label>
                <select class="multisteps-form__select form-control" name="DiningRoomset" id="DiningRoomset">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="KitchenTableandchairs">Kitchen Table and chairs:</label>
                <select class="multisteps-form__select form-control" name="KitchenTableandchairs" id="KitchenTableandchairs">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="ArmChair">Arm Chair:</label>
                <select class="multisteps-form__select form-control" name="ArmChair" id="ArmChair">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <label for="Rugs">Rugs:</label>
                <select class="multisteps-form__select form-control" name="Rugs" id="Rugs">
                    <option value="None">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 or More</option>
                    </select>		
                    <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" id="ninth" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
            <!--single form panel-->
           <!--single form panel-->
        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Additional and Miscellaneous Items</h3>
                <label for="Garageandorsheditems">Garage and/or Shed items - please list:</label>
                <textarea class="multisteps-form__textarea form-control" placeholder="Your Answer" id="Garageandorsheditems" name="Garageandorsheditems"></textarea>
                <label for="Misc">List all Misc. items to be moved ? Ex. Fish Tank, Safe, Medical Equipment, Exercise Equipment, Extra Large Items:</label>
                <textarea class="multisteps-form__textarea form-control" placeholder="Your Answer" id="Misc" name="Misc"></textarea>
                <label for="fragile">Please list all extremely fragile and/ or valuable items and the value associated with them.:</label>
                <textarea class="multisteps-form__textarea form-control" placeholder="Your Answer" id="fragile" name="fragile"></textarea>
                <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" id="tenth" type="button" title="Next">Next</button>
                  </div>
                </div>
            <!--single form panel-->
            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
              <h3 class="multisteps-form__title">Helpful moving information</h3>
              <p>Upon acceptance of this quote you are required to notify Arnold's Moving Services of any and all potentially harmful or hazardous substances or items you may posses. You will be responsible for the removal of these items from the premises. Below is a listing of items that movers commonly do not handle, including:</p>
              <h3 class="multisteps-form__title">What not to pack</h3>
              <center><img src="././image/safety1.jpg"></center>
              <h3 class="multisteps-form__title">Personal Items - What not to pack</h3>
              <center><img src="././image/personal.jpg""></center>
                <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                  <button class="btn btn-success ml-auto" type="submit" name="button" id="submit" title="Send">Send</button>
                </div>
            </div>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>
</div>

<!-- partial -->
<script src="./jquery-3.5.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script  src="./script.js"></script>
<script  src="./form.js"></script>

</body>
</html>