    <div class="container_dashboard">
        <!-- --------navar---------- -->
        <nav class="system_header">
            <section class="top_section">
                <a href="#div1"><img src="./images/Logo3.png" alt="img" /></a>
            </section>
            <section class="middle_section">
                <li>
                    <button class="btn_link">
                        <a href="#div3"><i class="fa-solid fa-user-pen"></i></a>
                    </button>
                </li>
                <li>
                    <button class="btn_link" onclick="div1();">
                        <a href="#div1"><i class="fa-solid fa-chart-simple"></i></a>
                    </button>
                </li>
                <li onclick="div2();">
                    <button class="btn_link">
                        <a href="#div2"><i class="fa-solid fa-message"></i></a>
                    </button>
                </li>

            </section>
        </nav>
        <!-- --------body------------ -->
        <main class="system_body">
            <section class="title_section">
                <h1>Sentiment Analysis on Customer Feedback Dashboard</h1>
                <h1 class="acro_name">SACFD</h1>
                <div class="right_div">

                    <i class="fa-sharp fa-solid fa-file-import" id="Upload_btn"></i>
                    <img id="dark_themes" src="./images/sun.png" alt="img" />
                    <i class="fa-solid fa-bars menu"></i>
                </div>
                <div class="upload_csv">
                    <form id="upload_csv" method="post" enctype="multipart/form-data" action="process.php">
                        <input type="file" name="file" id="file" accept=".csv">
                        <button type="submit" name="submitcsv" id="submit_import">Submit CSV</button>
                    </form>
                </div>
            </section>
            <section class="bottom_body_section">
                <div class="scroll_container">
                    <section class="div3" id="div3">
                        <form action="process.php" method="post" class="form">
                            <h3>Customer Feedback Form</h3>
                            <div class="form1">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" required />
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date" required />
                                <br />
                                <h4>Client Type</h4>
                                <div class="respo_type">
                                    <div class="type_cont">
                                        <label for="student">
                                            <input type="radio" name="client_type" id="student" required value="Student">Student
                                        </label>
                                        <br>
                                        <label for="alumni">
                                            <input type="radio" name="client_type" id="alumni" required value="Alumni">Alumnus/Alumna
                                        </label>
                                        <label for="others">
                                            <input type="radio" name="client_type" id="others" required value="Others">Others(Parents/Visitors)
                                        </label>
                                    </div>
                                    <div class="type_cont">
                                        <label for="adminstaff">
                                            <input type="radio" name="client_type" id="adminstaff" required value="Employee (Admin Staff)">Employee (Admin Staff)
                                        </label>
                                        <br>
                                        <label for="faculty">
                                            <input type="radio" name="client_type" id="faculty" required value="Employee (Faculty)">Employee (Faculty)
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <h4>Services Availed of (Place Check):</h4>
                                <div class="checkbox_btn">
                                    <div class="cols_btn">
                                        <div class="cb_btn">
                                            <label for="service_registrar">
                                                <input type="checkbox" onchange="countservice('service_registrar');" id="service_registrar" required name="registrar" />
                                                Registrar
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_clinic">
                                                <input type="checkbox" onchange="countservice('service_clinic');" id="service_clinic" required name="clinic" />
                                                Clinic
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_cashier">
                                                <input type="checkbox" onchange="countservice('service_cashier');" id="service_cashier" required name="cashier" />
                                                Cashier
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_guidance">
                                                <input type="checkbox" onchange="countservice('service_guidance');" id="service_guidance" required name="guidance" />
                                                Guidance
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_library">
                                                <input type="checkbox" onchange="countservice('service_library');" id="service_library" required name="library" />
                                                Library
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="admin">
                                                <input type="checkbox" onchange="countservice('service_admin');" id="service_admin" required name="admin" />
                                                Admin
                                            </label>
                                        </div>
                                    </div>
                                    <div class="cols_btn">
                                        <div class="cb_btn">
                                            <label for="service_hr">
                                                <input type="checkbox" onchange="countservice('service_hr');" id="service_hr" required name="hr" />
                                                HR
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_accounting">
                                                <input type="checkbox" onchange="countservice('service_accounting');" id="service_accounting" required name="accounting" />
                                                Accounting
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_budget">
                                                <input type="checkbox" onchange="countservice('service_budget');" id="service_budget" required name="budget" />
                                                Budget
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_gs">
                                                <input type="checkbox" onchange="countservice('service_gs');" id="service_gs" required name="gs" />
                                                GS
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_cte">
                                                <input type="checkbox" onchange="countservice('service_cte');" id="service_cte" required name="cte" />
                                                CTE
                                            </label>
                                        </div>
                                    </div>
                                    <div class="cols_btn">
                                        <div class="cb_btn">
                                            <label for="service_cbm">
                                                <input type="checkbox" onchange="countservice('service_cbm');" id="service_cbm" required name="cbm" />
                                                CBM
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_cas">
                                                <input type="checkbox" onchange="countservice('service_cas');" id="service_cas" required name="cas" />
                                                CAS
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_cet">
                                                <input type="checkbox" onchange="countservice('service_cet');" id="service_cet" required name="cet" />
                                                CET
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_cite">
                                                <input type="checkbox" onchange="countservice('service_cite');" id="service_cite" required name="cite" />
                                                CITE
                                            </label>
                                        </div>
                                        <div class="cb_btn">
                                            <label for="service_ict">
                                                <input type="checkbox" onchange="countservice('service_ict');" id="service_ict" required name="ict" />
                                                ICT
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <label for="purpose_of_transaction">Purpose of transaction:</label>
                                <textarea id="purpose_of_transaction" name="purpose_of_transaction" class="textarea1" required></textarea>
                                <label for="puo_transacted">Person/Unit/Officer Transact with:</label>
                                <textarea id="puo_transacted" class="textarea1" name="puo_transacted" required></textarea>
                                <h2>Customer Satisfaction Rating</h2>
                                <div class="checkbox_btn2">
                                    <div class="row-2">
                                        <label for="Excellent">
                                            <input type="radio" id="Excellent" value="5-Excellent" name="customer_rating" required />
                                            5-Excellent
                                        </label>
                                        <label for="Good">
                                            <input type="radio" id="Good" value="4-Good" name="customer_rating" required />
                                            4-Good
                                        </label>
                                        <label for="Satifactory">
                                            <input type="radio" id="Satifactory" value="3-Satifactory" name="customer_rating" required />
                                            3-Satifactory
                                        </label>
                                    </div>
                                    <div class="row-2">

                                        <label for="Clinic">
                                            <input type="radio" id="Clinic" value="2-Clinic" name="customer_rating" required />
                                            2-Poor(Need Emprovement)
                                        </label>
                                        <label for="Poor">
                                            <input type="radio" id="Poor" value="1-Poor" name="customer_rating" required />
                                            1-Poor
                                        </label>
                                    </div>
                                    <h2>Customer Feedback</h2>
                                    <div class="checkbox_btn3">
                                        <div class="row-2">
                                            <label for="Compliment">
                                                <input type="radio" id="Compliment" value="Compliment" name="customer_feedback" required />
                                                Compliment
                                            </label>
                                            <label for="Suggestion">
                                                <input type="radio" id="Suggestion" value="Suggestion" name="customer_feedback" required />
                                                Suggestion
                                            </label>
                                            <label for="Complaint">
                                                <input type="radio" id="Complaint" value="Complaint" name="customer_feedback" required />
                                                Complaint
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <label for="fodoti">Factor or Details of the Incident (Kindly answer in English):</label>
                                <textarea id="fodoti" class="textarea2" name="fodoti" required></textarea>
                                <label for="rsdafto">Recommendations/Suggestions/
                                    Desired Action from the Office:</label>
                                <textarea id="rsdafto" class="textarea2" name="rsdafto" required></textarea>
                                <input class="btn_submit" type="submit" name="submit" />
                            </div>
                        </form>
                    </section>
                    <section class="div1" id="div1">
                        <div class="div1_container">
                            <div class="card1" data-aos="fade-right">
                                <h5>Number of All Time Responses</h5>
                                <div class="total_res">
                                    <p>Total</p>
                                    <span><?= $counter ?></span>
                                </div>
                                <div class="chart_1" id="alltimechart"></div>
                            </div>
                            <div class="card2" data-aos="fade-down">
                                <h5>Rating of Offices by Number of Responses</h5>
                                <p>Total of <span id="asda"></span> Respondent in year <span id="asde"></span></p>
                                <div class="input_year"> <label for="chart2yearfilter">Filter:</label>
                                    <input type="number" min="2000" id="chart2yearfilter" onchange="yearfilter('netpromoterchart');" onkeyup="yearfilter('netpromoterchart');">
                                </div>
                                <div class="chart_2">
                                    <div class="chart_line" id="netpromoterchart"></div>
                                </div>
                            </div>
                            <div class="card3">
                                <h5>Net Promoter Score</h5>
                                <p>Services Rating</p>
                                <div class="dropdown_wrap">
                                    <select id="selectedservice" class="form-select" onchange="selectservicechange();">
                                        <option value="All">All</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Budget">Budget</option>
                                        <option value="CAS">CAS</option>
                                        <option value="Cashier">Cashier</option>
                                        <option value="CBM">CBM</option>
                                        <option value="CET">CET</option>
                                        <option value="CITE">CITE</option>
                                        <option value="Clinic">Clinic</option>
                                        <option value="CTE">CTE</option>
                                        <option value="GS">GS</option>
                                        <option value="Guidance">Guidance</option>
                                        <option value="HR">HR</option>
                                        <option value="ICT">ICT</option>
                                        <option value="Library">Library</option>
                                        <option value="Registrar">Registrar</option>
                                    </select>
                                </div>

                                <div class="chart_3" id="chart_3" style="position: relative;">
                                    <div class="x-scroll">
                                        <canvas id="serviceratingcanvas0"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="div2" id="div2">
                        <div class="div2_container">
                            <div class="card4">
                                <h5>Sentiment share over time</h5>
                                <span id="yeartotal"></span>
                                <label for="piechartyear" class="piechartyear">Filter:</label>
                                <input class="year_pie" type="number" onchange="yearfilter('piechartyear');" onkeyup="yearfilter('piechartyear');" id="piechartyear" min="2000">
                                <div class="chart_4" id="chart_4">

                                </div>
                            </div>
                            <div class="card5">
                                <h5>Customer Feedback</h5>
                                <p>Feedback from Random Clients</p>
                                <div class="dropdown_wrap_fb">
                                    <select id="analyzesenti">
                                        <option value="all">All</option>
                                        <option value="positive">Positive</option>
                                        <option value="negative">Negative</option>
                                        <option value="neutral">Neutral</option>
                                    </select>
                                </div>
                                <div class="chart_5">
                                    <div class="comment_box" id="comment_box">
                                    </div>
                                    <div class="no_btns">
                                        <p><span id="commentCount"></span> of <span id="commentUpTo"></span></p>
                                        <button onclick="prevcomment();"><i class="fa-solid fa-angle-left"></i></button>
                                        <button onclick="nextcomment();"><i class="fa-solid fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </main>
    </div>