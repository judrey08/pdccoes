


<!-- Modal -->
<div class="modal fade" id="addChild" tabindex="-1" role="dialog" aria-labelledby="addChildLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form method="Post" action="cisPesModal2.php">
            
              <!-- ~~~~~~~~~~~~~~~~~~~~~ start modal header ~~~~~~~~~~~~~~~~~ -->
              <div class="modal-header">
                  <h5 class="modal-title" id="addChild">Adding a Child</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <!-- ~~~~~~~~~~~~~~~~~~~~~ end modal header ~~~~~~~~~~~~~~~~~ -->

              <!-- ~~~~~~~~~~~~~~~~~~~~~ start modal body ~~~~~~~~~~~~~~~~~ -->
              <div class="modal-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#cis" role="tab" aria-selected="true">CIS</a></li>
                  <li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pes1" role="tab" aria-selected="false">Pes1</a></li>
                  <li class="nav-item"><a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pes2" role="tab" aria-selected="false">Pes2</a></li>
                </ul>

                <div class="tab-content">
                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~ CIS ~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <div class="tab-pane fade show active" id="cis" role="tabpanel">
                    <div class="container">
                      <div class="row">
                        <div class="container p-4" style=";border: 2px solid #000;">
                          <h4>Child Information</h4>
                          <div class="form-group row">
                            <label class="col-sm-3">Firstname:</label>
                            <div class="col-sm-9"><input type="text" name="fname" placeholder="First Name" class="form-control" required></div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3">Middlename:</label>
                            <div class="col-sm-9"><input type="text" name="mname" placeholder="Middle Name" class="form-control"></div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3">Lastname:</label>
                            <div class="col-sm-9"><input type="text" name="lname" class="form-control" placeholder="Last Name" required></div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3">Gender:</label>
                            <div class="col-sm-9">
                              <div class="form-group">
                                <select class="form-control" id="Gender" required>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3">Birthday:</label>
                            <div class="col-sm-9"><input type="date" name="bday" class="form-control" required></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~ CIS ~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~ PES ~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <div class="tab-pane fade" id="pes1" role="tabpanel">
                    <div class="container">
                      <div class="row">      
                        <div class="container p-4" style="border: 2px solid #000;">
                          <h5>Parent Evaluation Sheet 1 <br> Baseline Profile for Parent Participants</h5>

            <div class="form-group row">
        <div class="col-sm-8 row">
          <label class="col-sm-4">Name of Father</label>
          <div class="col-sm-8"><input type="text" placeholder="Name of Father" class="form-control"></div>
        </div>
        
        <div class="col-sm-4 row">
          <label class="col-sm-5">Age:</label>
          <div class="col-sm-7"><input type="number" min="1" class="form-control"></div>
        </div>
            </div>
            
            <div class="form-group row">
        <div class="col-sm-8 row">
          <label class="col-sm-4 col-form-label">Name of Mother:</label>
          <div class="col-sm-8"><input type="text" placeholder="Name of Mother" class="form-control"></div>
        </div>
      
        <div class="col-sm-4 row">
          <label class="col-sm-5 col-form-label">Age:</label>
          <div class="col-sm-7"><input type="number" min="1" class="form-control"></div>
        </div>
            </div>
            
            <div class="form-group row">
              <div class="col-sm-6 ">
                <label class=" col-form-label"># of children (0-6yrs): </label>
                <div><input type="number" min="0" class="form-control"></div>
              </div>
            
              <div class="col-sm-6 ">
                <label class=" col-form-label"># of children (7-18yrs): </label>
                <div><input type="number" min="0" class="form-control"></div>
              </div>
            </div>               
            
            <div class="form-group row">
                
        <div class="col-sm-12"> 
                    <label class="col-form-label">1.) What do you consider as rights of the children? (Check)</label>
                  <br>   
                    <label>Every child has the right to:</label><br>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <div class="form-check form-check-inline col-sm-6">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox1">Be born well</label>
            </div>
            <div class="form-check form-check-inline col-sm-5">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label" for="inlineCheckbox1">Benefit of the family life</label>
            </div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <div class="form-check form-check-inline col-sm-6">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox1">An environment that develops his personality</label>
            </div>
            <div class="form-check form-check-inline col-sm-5">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label" for="inlineCheckbox1">Grow in freedom and responsibility</label>
            </div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <div class="form-check form-check-inline col-sm-6">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox1">Health</label>
            </div>
            <div class="form-check form-check-inline col-sm-5">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label" for="inlineCheckbox1">Be reared in morality</label>
            </div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <div class="form-check form-check-inline col-sm-6">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox1">Education</label>
            </div>
            <div class="form-check form-check-inline col-sm-5">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label" for="inlineCheckbox1">Wholesome recreation</label>
            </div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <div class="form-check form-check-inline col-sm-6">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox1">Protection from exploitation</label>
            </div>
            <div class="form-check form-check-inline col-sm-5">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label" for="inlineCheckbox1">Peaceful society</label>
            </div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <div class="form-check form-check-inline col-sm-6">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox1">Efficient and honest government</label>
            </div>
            <div class="form-check form-check-inline col-sm-5">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label" for="inlineCheckbox1">Care, assistance and protection of the state</label>
            </div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <div class="form-check form-check-inline col-sm-6">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox1">Others</label>
            </div>
          </div>
        </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            
            <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label">2.) What do you consider as your rights and duties towards your children?</label>
                  <br>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Keep them in your company</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Supervise activities, recreation, association w/ others</label>
          </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Support</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Enhance, protect, preserve physical and mental health </label>
          </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Provide them moral and spiritual guidance</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Demand respect and obedience</label>
          </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Incalculate, honesty, integrity. self-discipline, industry, thrift, civic mindedness and citizenships</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Educate and instruct by precept and good example</label>
          </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1"> Give them advice, counsel and understanding</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">others</label>
          </div>

        </div>
      </div>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->         
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->         
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            
            
            <div class="form-group row">
                <div class="col-sm-12">
                  <label class="col-form-label">3.) What do you think are the duties of children?</label><br>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Lead upright and virtuous life</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Love, respect, ober parents</label>
          </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Love brothers and sisters</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Observe human rights</label>
          </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Go to school</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Respect elders and traditions</label>
          </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Civic Participation</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Others</label>
          </div>

        </div>
      </div>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->         
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->         
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            
                <div class="form-group row">
      <label class="col-form-labe col-sm-11">4.) What needs of the children do you consider? Which of these needs do you think are adequately provided for? (Check)</label>
          <label class="col-sm-4 col-form-label">Needs</label>
          <label class="col-sm-4 col-form-label">Perceived Child's Needs</label>
          <label class="col-sm-4 col-form-label">Needs Provided For</label>
        </div>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Affection/Love and Companionship</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Nutritious Food and Safe Water</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Clothing</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Shelter</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Immunization</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Medical Care</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Dental Care</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Schooling</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Play Recreation</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Religious Training</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Learning Body Skills</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Learning About the Environment</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Learning Communication SKills</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Learning Self-Confidence</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-check form-check-inline col-sm-5">
          <label class="form-check-label" for="inlineCheckbox1">Relation w/ Others</label>
        </div>
        <div class="form-check form-check-inline col-sm-4">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        </div>
        <div class="form-check form-check-inline col-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        </div>
        <br>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Others, specify:</label>
                    <div class="col-sm-8"><input type="text" class="form-control"></div>
        </div>

            
            <!-- <a href="" type="submit" class="col-sm-2 btn btn-primary" style="margin:5px;">Back</a> -->
            
            <!-- <a href="pes2.php" type="submit" class="col-sm-2 btn btn-primary" style="margin:5px;">Next</a> -->
  </div>

                      </div>
                    </div>
                  </div>
                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~ PES ~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~ PES2 ~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <div class="tab-pane fade" id="pes2" role="tabpanel">
                    <div class="container">
                      <div class="row">
                        <div class="container p-4" style="border: 2px solid #000;">
  <h5>Parent Evaluation Sheet 2 <br> Baseline Profile for Parent Participants</h5>
      
      <div class="form-group row">
        <div class="col-sm-12">
        <label>5.) What are the activities undertaken by the family members together? (Please rank according to frequency: Rank 1 for most frequent, etc.)</label>
          <div class="form-group row">
            <label for="title" class="col-sm-4 col-form-label">Activities</label>
            <label for="title2" class="col-sm-8 col-form-label">Rank</label>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Eating</label>
            <div class="col-sm-8">
              <input type="number" class="form-control"  min="1" >
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Praying</label>
            <div class="col-sm-8">
              <input type="number" class="form-control"  min="1" >
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Doing House Chores</label>
            <div class="col-sm-8">
              <input type="number" class="form-control"  min="1" >
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Attending fiestas/parties</label>
            <div class="col-sm-8">
              <input type="number" class="form-control"  min="1" >
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Going to Church</label>
            <div class="col-sm-8">
              <input type="number" class="form-control"  min="1" >
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Reading Stories</label>
            <div class="col-sm-8">
              <input type="number" class="form-control"  min="1" >
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Making Toys</label>
            <div class="col-sm-8">
              <input type="number" class="form-control"  min="1" >
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Others</label>
            <div class="col-sm-8">
              <input type="number" class="form-control"  min="1" >
            </div>
          </div>
        </div>
      </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      
      <div class="form-group row">
        <div class="col-sm-12">
        <label>
          6.) How do you spend your free/leisure time? Please rank according to priority
        </label>
          <div class="form-group row">
            <label for="title" class="col-sm-4 col-form-label">Activities</label>
            <label for="title2" class="col-sm-4 col-form-label">Husband</label>
            <label for="title3" class="col-sm-4 col-form-label">Wife</label>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Sleep of Rest</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Talk/drink w/ friends</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Talk w/ children</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Play w/ Children</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Going to Church</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Outing w/ Family</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Go to Movies</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Listen to Radio</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Watch TV</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Read Newspaper</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Others</label>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
            <div class="col-sm-4"><input type="number" class="form-control"  min="1" ></div>
          </div>
          
        </div>
      </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label">
            7.) What do you discuss/talk about with your children?
          </label>
          <input type="text" class="form-control" >
        </div>
      </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label">
            8.) What problems/difficulties do you encounter in your relationship as husband and wife?
          </label>
          <input type="text" class="form-control" >
        </div>
      </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label">
          9.) What do you discuss/talk about with your children?
          </label>
          <input type="text" class="form-control" >
        </div>
      </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label">
          10.) What difficulties/problems of your children are aware of/they share or discuss with you?
          </label>
          <input type="text" class="form-control" >
        </div>
      </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      
      <div class="form-group row">
        <div class="col-sm-12">
          <label class="col-form-label">
          11.) What difficulties do you encounter in rearing your children other than financial?
          </label>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Inappropriate behavior of children e.g. temper, tantrums, nagging, whining.</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Attention seeking/demanding, waking up several times at night for your company or to be entertained.</label>
          </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Difficulty in handling chiild behaviors like fear of the dark, dislike for certain foods can do nothing for himself, etc.</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Husband-wife realtionship affecting children.</label>
          </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Inadequacy knowledge and skill in how to teach children.</label>
          </div>
          <div class="form-check form-check-inline col-sm-5">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox1">Lack of preparedness to handle childhood ailments</label>
          </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <div class="form-check form-check-inline col-sm-6">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox1">Others</label>
          </div>
        </div>
      </div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        
      <div class="form-group row">
        <div class="col-sm-12">
            <label class="col-form-label">
             12.) On what specific area of parenting do you want to know more?
            </label>
                    <div class="form-group row">
                        <label for="title" class="col-sm-6 col-form-label">Husband</label>
                        <label for="title2" class="col-sm-6 col-form-label">Wife</label>
                    </div>   
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                    <div class="form-check form-check-inline col-sm-6">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox1">Health Concerns</label>
                    </div>
                    <div class="form-check form-check-inline col-sm-5">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                      <label class="form-check-label" for="inlineCheckbox1">Health Concerns</label>
                    </div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                    <div class="form-check form-check-inline col-sm-6">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox1">Relationships Concerns</label>
                    </div>
                    <div class="form-check form-check-inline col-sm-5">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                      <label class="form-check-label" for="inlineCheckbox1">Relationships Concerns</label>
                    </div>  
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                    <div class="form-check form-check-inline col-sm-6">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox1">Child Reading</label>
                    </div>
                    <div class="form-check form-check-inline col-sm-5">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                      <label class="form-check-label" for="inlineCheckbox1">Child Reading</label>
                    </div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                    <div class="form-check form-check-inline col-sm-6">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox1">Behavior Management</label>
                    </div>
                    <div class="form-check form-check-inline col-sm-5">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                      <label class="form-check-label" for="inlineCheckbox1">Behavior Management</label>
                    </div>
        </div>
      </div>
      
      <div class="form-group row">
                <div class="col-sm-12">
                <label>13.) What activities do you suggest to improve relationship in the family?
                </label>
                    <div class="row">
                        <label class="col-sm-4">For Husband and Wife:</label>
                        <div class="col-sm-8"><input type="text" class="form-control"></div>
                    </div><br>
                    <div class="row">
                      <label class="col-sm-4">For Parents and Children:</label>
                      <div class="col-sm-8"><input type="text" class="form-control"></div>
                    </div>
                </div>
      </div>
      
      <div class="form-group row">
        <div class="col-sm-12"> 
        <label>14.) What activities do you suggest to protect the lives of your children and stimulate their development? </label>
        <input type="text" class="form-control" >
        </div>
      </div>
</div>
                      </div>
                    </div>
                  </div>
                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~ PES2 ~~~~~~~~~~~~~~~~~ -->
                  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                </div>
                  
              </div>
              <!-- ~~~~~~~~~~~~~~~~~~~~~ end modal body ~~~~~~~~~~~~~~~~~ -->
              <!-- ~~~~~~~~~~~~~~~~~~~~~ start modal footer ~~~~~~~~~~~~~~~~~ -->
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
              </div>
              <!-- ~~~~~~~~~~~~~~~~~~~~~ end modal footer ~~~~~~~~~~~~~~~~~ -->
          </form>
        </div>
    </div>
</div>

