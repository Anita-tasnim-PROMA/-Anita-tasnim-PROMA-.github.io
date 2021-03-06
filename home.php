<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prtfolio</title>
    <!-- Unicons -->
    <script src="https://kit.fontawesome.com/6c653065a1.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->
    <!-- css -->
    
    <link rel="icon" href="img/fav.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    
<?php
	require_once("connect.php");
?>


    <!-- ---------------header------------ -->
    <header class="header" id="header">
        <!-- <i>uihfirfir</i> -->
        <div class="header_in">
        <nav class="nav container">
            <a href="#" class="nav_logo"> <img src="img/fcv.ico" alt="">
                Proma</a>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid ">
                    <li class="nav_item">
                        <a href="#home" class="nav_link">
                            <i class="fas fa-home nav_icon "></i> Home
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#about" class="nav_link">
                            <i class="fas fa-user nav_icon"></i> About
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#skills" class="nav_link">
                            <i class="fas fa-file nav_icon"></i> Skills
                        </a>
                    </li>
                    
                    <li class="nav_item">
                        <a href="#portfolio" class="nav_link">
                            <i class="far fa-image nav_icon"></i> Planning in career path..

                        </a>
                    </li>
                    
                    <li class="nav_item">
                        <a href="#services" class="nav_link">
                            <i class="fas fa-briefcase nav_icon"></i> Avocation
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#contact" class="nav_link">
                            <i class="fas fa-comment-alt nav_icon"></i> Contact 

                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="index.html" target = "_self" class="nav_link">
                            <i class="fas fa-comment-alt nav_icon"></i> LOGOUT

                        </a>
                    </li>

                </ul>

                <i class="fas fa-times nav_close" id="nav-close"></i>
            </div>
        </div>

            <div class="nav_btns">
                <div class="nav_toggle" id="nav-toggle">
                    <i class="fas fa-th"></i>
                </div>
            </div>

        </nav>
    </header>

    <!-- ================= Main ============= -->
    <main class="main">
        <!-- ------------- HOME---------- -->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_content grid">
                    <div class="home_social">
                        <a href="https://www.linkedin.com/in/anita-tasnim-a965711bb/" target="_blank" class="home_social_icon">
                            <i class="fab fa-linkedin"></i>
                        </a>

                        <a href="https://dribbble.com/" target="_blank" class="home_social_icon">
                            <i class="fab fa-google"></i>
                        </a>

                        <a href="https://github.com/Anita-tasnim-PROMA" target="_blank" class="home_social_icon">
                            <i class="fab fa-github"></i>
                        </a>
                        
                    </div>
                    <div class="home_img">
                        <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                <image class="home_blob-img" x='36' y='9'  xlink:href="img/pt.jpg"/>
                            </g>
                        </svg>
                    </div>
                        <div class="home_data">
                            <h1 class="home_title">
                                Salam,<br>I'm Anita
                            </h1>
                            <h3 class="home_subtitle">Student</h3>
                            <p class="home_description">
                                Lorem ipsum dolor sit amet, ore a natus corrupti laboriosam debitis veniam voluptates. Eaque aspernatur amet obcaecati
                            </p>
                            <a href="#contact" class="button button_flex ">
                                Contact Me &nbsp <i class="fas fa-envelope "></i>
                            </a>
                        </div>

                </div>

                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button_flex but_problem">
                        <i class="fas fa-mouse home_scroll-mouse but_problem"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="fas fa-arrow-down home_scroll-arrow but_problem"></i>
                    </a>
                </div>
            </div>
        </section>

        <section class="about section" id="about">
            <h2 class="section_title">About Me</h2>
            <span class="section_subtitle">My Introduction</span>

            <div class="about_container container grid">
                <img src="img/hijab.png" alt="" class="about_img">

                <div class="about_data">
                    <p class="about_description">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, mollitia oremLorem ipsum dolor sit amet consectetur, adipisicing elit ihil tempore rem perspiciatis placeat modi? Dicta.
                    </p>

                    <div class="about_info">
                        <div>
                            <span class="about_info-title">00+</span>
                            <span class="about_info-name">Years <br> experience</span>
                        </div>

                        <div>
                            <span class="about_info-title">00+</span>
                            <span class="about_info-name">Completed <br> Project</span>
                        </div>

                        <div>
                            <span class="about_info-title">00+</span>
                            <span class="about_info-name">Companies <br> worked</span>
                        </div>
                    </div>

                    <div class="about_buttons">
                        <a download="" href="/pdf/pdf.pdf" class="button button_flex">
                           <div> Download Resume  <i class="fas fa-download"></i></div>
                        </a>
                    </div>


                </div>
            </div>
    </section>

    <!-- ============== SKILLS------------ -->
    <section class="skills section" id="skills">
        <h2 class="section_title">Skills</h2>
         <!-- <i class="fas fa-code skills_icon"></i> -->
        <span class="section_subtitle">My Technical Level</span>

        <div class="skills_container container grid">
            <div>
                <!--................ SKILL 1 ..................-->
                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <!-- <i class="fas fa-code skills_icon"></i> -->

                        <div>
                            <h1 class="skills_title"></h1>
                            <span class="skill_subtitle"></span>
                        </div>
                         <i class="fas fa-code  but_problem"></i>
                        <i class="fas fa-angle-down  but_problem"></i>
                    </div>

                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">HTML</h3>
                                <span class="skills_number">80%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_html"></span>
                             </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">CSS</h3>
                                <span class="skills_number">55%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_css"></span>
                             </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">JavaScript</h3>
                                <span class="skills_number">20%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_js"></span>
                             </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">Bootstrap</h3>
                                <span class="skills_number">20%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_boots"></span>
                             </div>
                        </div>

                       


                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">C</h3>
                                <span class="skills_number">70%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_c"></span>
                             </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">C++</h3>
                                <span class="skills_number">70%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_cpp"></span>
                             </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">Python</h3>
                                <span class="skills_number">64%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_python"></span>
                             </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">PHP</h3>
                                <span class="skills_number">.7%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_php"></span>
                             </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">Discrete Math</h3>
                                <span class="skills_number">30%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_discrete"></span>
                             </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">Ds & algo</h3>
                                <span class="skills_number">45%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_ds"></span>
                             </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">Microsoft Office Skills</h3>
                                <span class="skills_number">60%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_office"></span>
                             </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name">Soft Skills</h3>
                                <span class="skills_number">61%</span>
                             </div>
                             <div class="skills_bar">
                                 <span class="skills_percentage skills_soft"></span>
                             </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>


    <!-- =============  Qualification ================== -->

    <section class="qualification section">
        <h2 class="section_title">Qualification</h2>
        <span class="section_subtitle">My Personal Journey</span>

         <div class="qualification_container container">
             <div class="qualification_tabs">
                 <div class="qualification_button button_flex qualification_active" data-target='#education'>
                    <i class="fas fa-graduation-cap qualification_icon"></i>
                    Education
                </div>

                <div class="qualification_button button_flex" data-target='#work'>
                    <i class="fas fa-briefcase qualification_icon"></i>
                    Work
                </div>
             </div>

             <div class="qualification_section">
                 <!-- ==============  Qualfication Content 1================== -->
                 <div class="qulafication_content qualification_active" data-content id="education">
                     <!-- ============  Qualification 1  ===========-->
                        <div class="qualification_data ">
                            <div>
                                <h3 class="qualification_title">SSC</h3>
                                <span class="qualification_subtitle">Nagendra Narayan Pilot Girls High School, Muktagachha, Mymensingh</span>
                                <div class="qualification_calendar">
                                    <i class="far fa-calendar-alt"></i>
                                    2014-2016
                                </div>
                            </div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>

                        <!-- ============  Qualification 2  ===========-->
                        <div class="qualification_data">
                             <div>

                             </div>
                            
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>

                            <div>
                                <h3 class="qualification_title">HSC</h3>
                                <span class="qualification_subtitle">Govt. Shahid Smrity College, Muktagachha, Mymensingh</span>
                                <div class="qualification_calendar">
                                    <i class="far fa-calendar-alt"></i>
                                    2016 - 2018
                                </div>
                            </div>

                           
                        </div>

                        <!-- ============  Qualification 3  ===========-->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">BSc(Engr) in ICT</h3>
                                <span class="qualification_subtitle">Islamic University, Bangladesh</span>
                                <div class="qualification_calendar">
                                    <i class="far fa-calendar-alt"></i>
                                    2019 - present
                                </div>
                            </div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>

                        

                    </div>
                 </div>

                 <!-- ==============  Qualfication Content 2================== -->
                 <div class="qulafication_content" data-content id="work">
                    <!-- ============  Qualification 1  ===========-->
                       <div class="qualification_data" >

                       <div>


                       </div>
                         <div>
                               <span class="qualification_rounder"></span>
                               <span class="qualification_line"></span>
                           </div>

                           <div>
                               <h3 class="qualification_title">Nothing</h3>
                               <span class="qualification_subtitle">I've no work experience</span>
                               <div class="qualification_calendar">
                                   <i class="far fa-calendar-alt"></i>
                                   ---- - ----
                               </div>
                           </div>

                         
                       </div>

                     

                       
                       

                  
                </div>
            </div>
         </div>
    </section>

    <!-- =============== avocation  ================================ -->
   <!-- =============== SErvices ================================ -->
   <section class="services section" id="services">
    <h2 class="section_title">Avocations</h2>
    <span class="section_subtitle">What I enjoy..</span>

    <div class="services_container container grid">

        <!-- ........... Services 1 ..................... -->
        <div class="services_content">
            <div>
                <i class="fas fa-book-open services_icon"></i>
                <h3 class="services_title">Reading Books</h3>
            </div>

            <span class="button button_flex button_s button_link services_button">
                View More <!--  *&nbsp;   -->
                <!-- <i class="fas fa-arrow-right button_icon"></i> -->
            </span>

            <!-- <div class="services_modal">

                <div class="services_modal-content">
                    <h4 class="services_modal-title">
                        Reading Books
                    </h4>
                    <i class="fas fa-times services_modal_close"></i>
                    <img src="" alt="">
               
               
               
                </div>

            </div> -->
        </div>

        <!-- ........... Services 2 ..................... -->
        <div class="services_content">
            <div>
                <i class="fas fa-headphones services_icon"></i>
                <h3 class="services_title">Watching videos</h3>
            </div>

            <span class="button button_flex button_s button_link services_button">
                View More <!--  *&nbsp;   -->
                <!-- <i class="fas fa-arrow-right button_icon" ></i> -->
            </span>

            <!-- <div class="services_modal">

                <div class="services_modal-content">
                    <h4 class="services_modal-title">
                        Frontend <br> Developer
                    </h4>
                    <i class="fas fa-times services_modal_close"></i>
                    <img src="" alt="">
               
               
               
                </div>

            </div> -->
        </div>

        <!-- ........... Services 3 ..................... -->
        <div class="services_content">
            <div>
                <i class="fas fa-pen services_icon"></i>
                <h3 class="services_title">Gaining more & more ilim</h3>
            </div>

            <span class="button button_flex button_s button_link services_button">
                View More <!--  *&nbsp;   -->
                <!-- <i class="fas fa-arrow-right button_icon"></i> -->
            </span>

            <!-- <div class="services_modal">

                <div class="services_modal-content">
                    <h4 class="services_modal-title">
                       Gaining more and more knoledge
                    </h4>
                    <i class="fas fa-times Close_ho"></i>
                    
               
               
               
                </div>

            </div> -->
        </div>
    </div>

</section>

<!-- ============  PortFolio =========== -->
<section class="portfolio section" id="portfolio">
    <h2 class="section_title">Planning in Carrier path ..</h2>
    <span class="section_subtitle">What in my mind</span>

    <div class="portfolio_container container">
        <div>
            <!--  ................portfolio  1............. -->
            <div class="portfolio_content grid">
                <img src="img/algo.jpg" alt="" class="portfolio_img">
                
                <div class="portfolio_data">
                    <h3 class="portfolio_title">Algorithmist</h3>
                    <p class="portfolio_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sapiente ad vero tempora? Cupiditate natus fugiat doloribus quidem.</p>
                    <a href="https://algorithmist.com/wiki/Main_Page" class="button button_flex button_s portfolio_button">
                        know more about this 
                        <i class="fas fa-arrow-right  but_problem"></i> 
                    </a>
                </div>
            </div>

              <!--  ................portfolio 2............. -->
              <div class="portfolio_content grid">
                <img src="img/Ai.jpg" alt="" class="portfolio_img">
                
                <div class="portfolio_data">
                    <h3 class="portfolio_title">Artificial Intelligence enthusiast</h3>
                    <p class="portfolio_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sapiente ad vero tempora? Cupiditate natus fugiat doloribus quidem.</p>
                    <a href="https://scholar.google.com/scholar?q=artificial+intelligence+enthusiast&hl=en&as_sdt=0&as_vis=1&oi=scholart" class="button button_flex button_s portfolio_button">
                        know more about this  
                        <i class="fas fa-arrow-right but_problem"></i>
                    </a>
                </div>
            </div>


              <!--  ................portfolio  3............. -->
              <div class="portfolio_content grid">
                <img src="img/p setter.jpg" alt="" class="portfolio_img">
                
                <div class="portfolio_data">
                    <h3 class="portfolio_title">Problem Solver</h3>
                    <p class="portfolio_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sapiente ad vero tempora? Cupiditate natus fugiat doloribus quidem.</p>
                    <a href="https://www.huffpost.com/entry/problem-solving_b_4302935" class="button button_flex button_s portfolio_button">
                        know more about this 
                        <i class="fas fa-arrow-right  but_problem"></i>
                    </a>
                </div>
            </div>

            <div class="portfolio_content grid">
                <img src="img/web.jpg" alt="" class="portfolio_img">
                
                <div class="portfolio_data">
                    <h3 class="portfolio_title">Web Developer</h3>
                    <p class="portfolio_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sapiente ad vero tempora? Cupiditate natus fugiat doloribus quidem.</p>
                    <a href="https://www.wikiwand.com/en/Web_development" class="button button_flex button_s portfolio_button">
                        know more about this 
                        <i class="fas fa-arrow-right  but_problem"></i>
                    </a>
                </div>
            </div>

<!-- contact------------------------- -->

    <section class="contact section" id="contact">  
        <h2 class="section_title">Contact Me
       </h2>
        <span class="section_subtitle">Get in touch</span>
        <div class="contact_container container grid ">
        <div>
            <div class="contact_information">
                <i class="fas fa-phone-alt contact_icon"></i>  

                <div>
                    <h3 class="contact_title">Call Me</h3>
                    <span class="contact_subtitle">999-777-666</span>
                </div>
            </div>

            <div class="contact_information">
                <i class="far fa-envelope contact_icon"></i>  

                <div>
                    <h3 class="contact_title">Email</h3>
                    <span class="contact_subtitle">anitatasnim.ict.46@gmail.com</span>
                </div>
            </div>

            <div class="contact_information">
                <i class="fas fa-map-marker-alt contact_icon"></i>  

                <div>
                    <h3 class="contact_title">Location</h3>
                    <span class="contact_subtitle">Mym - Bangladesh</span>
                </div>
            </div>

        </div>

            <form action="" class="contact_form grid">
                <div class="contact_inputs grid">
                    <div class="contact_content">
                        <label for="" class="contact_label">Name</label>
                        <input type="text" placeholder="Name" class="contact_input">
                    </div>

                    <div class="contact_content">
                        <label for="" class="contact_label">Email</label>
                        <input type="email" class="contact_input">
                    </div>

                    <div class="contact_content">
                        <label for="" class="contact_label">Message</label>
                        <textarea name="" id="" cols="0" rows="10" class="contact_input"></textarea>
                    </div>

                    <div>
                        <a href="#" class="button button_flex">
                            Send Message
                            <i class="fas fa-comment button_icon but_problem"></i>
                        </a>
                    </div>
                </div>






                
            <!-- <div class="contact_information">
                <i class="fas fa-phone-alt contact_icon"></i> 

                <div>
                    <h3 class="contact_title">Call Me</h3>
                </div>
            </div> -->
        </div>
    </section>


           <!-- =========== Footer ======== -->
           <footer class="footer">
               <div class="footer_bg">
                   <div class="footer_container container grid">
                       <div>
                           <h1 class="footer_title">Anita</h1>
                           <span class="footer_subtitle">Student</span>
                       </div>

                       <div class="footer_social">
                        <a href="#" target="_blank" class="footer_icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"  class="footer_icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"  class="footer_icon"><i class="fab fa-telegram"></i></a>
                    </div>
                   </div>

                   <p class="footer_copy">&#169; Anita_Tasnim. All right reserved</p>
               </div>
           </footer>

           <!-- =========== Scroll Top ===== -->
           <a href="#" class="scrollup" id="scroll-up">
            <i class="fas fa-arrow-up scrollup_icon"></i>
           </a>

        </div>
    </div>


</section>














    </main>

    <!-- <script src="https://kit.fontawesome.com/6c653065a1.js" crossorigin="anonymous"></script> -->
    <script src="JS/script.js"></script>

</body>
</html>

