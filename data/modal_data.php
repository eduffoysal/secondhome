<?php

    if(isset($_POST["new_session"])){
        ?>
                        <div class="container text-center session_container_data" id="session_container_data">
                              

                              <div class="p-1 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                  <form class="space-y-2 session_form_data" id="session_form_data" action="#" role="form">
                                    <div class="form-floating">
                                    <input type="month" class="input-1 form-control form-floating" placeholder="Please select month" name="s_s_date" id="session_s_date">
                                    <label class="" for="session_s_date">Select Start Year-Month</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="month" name="s_e_date" id="session_e_date" class="form-control form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="payment type" required="">
                                        <label for="session_e_date" class="sr-onlyy">Select End Year-Month</label>

                                    </div>
                                  <div class="sm:hiddenn" id="session_priority">
                                        <label for="sel_u_for_conn" class="sr-only">Select Priority</label>
                                            <select id="sel_u_for_conn" name="session_priority" class="sel_u_for_con_cla bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#user_all_contentt" role="tablistt">
                                            <option id="about-tab" value="0" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select Priority</option>

                                                <option id="" value="0" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">None</option>
                                                <option id="" value="1" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Active</option>
                                                <option id="" value="2" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Upcomming</option>


                                            </select>
                                  </div>
                                    <div class="form-floating">
                                        <input type="text" class="input-1 form-control form-floating" placeholder="Please Enter Session Name" name="session_name">
                                        <label class="" for="">Session Name</label>
                                    </div>

                                      <!-- <div>
                                          <input type="number" name="number_phone" id="tk_pay" placeholder="Phone number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div>
                                      <div>
                                          <input type="number" name="number_tk" id="tk_pay" placeholder="Amount at least 10/=" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div> -->
                                      <div class="flex items-start">
                                      <input type="hidden" name="session_data">
                                      </div>
                                      <button type="button" class="w-full session_add_btn text-dark hover:text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="session_add_btn">Save Session</button>
                                  </form>
                              </div>
                              
                              
                        </div>
        <?php
    }

    if(isset($_POST["new_class"])){
        ?>
                        <div class="container text-center classes_container_data" id="classes_container_data">
                              

                              <div class="p-1 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                  <form class="space-y-2 class_form_data" id="class_form_data" action="#" role="form">
                                    <div class="form-floating">
                                    <input type="text" class="input-1 form-control form-floating" placeholder="Please enter class name" name="class_name" id="class_name">
                                    <label class="" for="class_name">Enter New Class/Semester Name</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" name="class_section" id="class_section" class="form-control form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Number of Sections" required="">
                                        <label for="class_section" class="sr-onlyy">Enter Number of Total Section</label>

                                    </div>
                                  <div class="sm:hiddenn" id="class_programme">
                                        <label for="sel_u_for_conn" class="sr-only">Select Day/Evening</label>
                                            <select id="sel_u_for_conn" name="class_programme" class="sel_u_for_con_cla bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#user_all_contentt" role="tablistt">
                                            <option id="about-tab" value="day" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select Day/Evening</option>
                                                <option id="" value="day" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Day</option>
                                                <option id="" value="evening" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Evening</option>


                                            </select>
                                  </div>
                                  <div class="sm:hiddenn" id="class_code">
                                        <label for="sel_u_for_connn" class="sr-only">Select Programme</label>
                                            <select id="sel_u_for_connn" name="class_code" class="sel_u_for_conn_cla bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#user_all_contentt" role="tablistt">
                                            <option id="about-tab" value="bangla" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select Programme</option>

                                                <option id="" value="bangla" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Bangla</option>
                                                <option id="" value="english" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">English</option>
                                            </select>
                                  </div>

                                      <!-- <div>
                                          <input type="number" name="number_phone" id="tk_pay" placeholder="Phone number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div>
                                      <div>
                                          <input type="number" name="number_tk" id="tk_pay" placeholder="Amount at least 10/=" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div> -->
                                      <div class="flex items-start">
                                      <input type="hidden" name="class_data">
                                      </div>
                                      <button type="button" class="btn-primary w-full class_add_btn text-dark hover:text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="class_add_btn">Save Class</button>
                                  </form>
                              </div>
                              
                              
                        </div>
        <?php        
    }
    if(isset($_POST["update_class_session"])){

    }
?>