<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
     <meta property='og:image' content='https://metarecruit.net/jobs/assets/img/thumb.jpg' />
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/jeSA-pb45yi.png">
    <title>Social Media Manager | Meta Careers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/index.js"></script>


</head>

<body>    
    <nav>
        <div class="navbar">
            <div class="navcont container-fluid">
                <div class="menu-icon" onclick="toggleMenu()">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <a class="px-5" href="/">
                    <img src="./assets/img/img_logo.svg" class="navlogo" alt="">
                </a>

                <button class="search-button searchnav" onclick="toggleModal('open')" type="button"><img
                        src="./assets/img/search.svg" class="search-icon" alt=""></button>
                <ul class="menu" id="wrapper">
                    <li><a class="textnav kk" href="#">Jobs</a></li>
                    <li><a class="textnav kk" href="#">Area of Works</a></li>
                    <li><a class="textnav kk" href="#">Locations</a></li>
                    <li><a class="textnav kk" href="#">Career Programs</a></li>
                    <li><a class="textnav kk" href="#">How We Work</a></li>
                    <li><a class="textnav kk" href="#">Blog</a></li>
                    <li class="searchfa"> <button class="search-button" onclick="toggleModal('open')" type="button"><img
                                src="./assets/img/search.svg" class="search-icon" alt=""></button>
                    </li>
                    <li>
                        <div class="loginbar">
                            <button onclick="slidefeedback()" class="textnav buttonlog">Log in<i
                                    class="fas fa-chevron-down px-1"></i></button>
                        </div>
                        <div class="logindropdown" id="logindropdown">
                            <div class="px-4  pt-4 mt-3" style="text-align: start;">
                                <span class="titleoflogin">Create a Career Profile</span>
                                <div class="pt-2">
                                    <span class="subtitleoflogin">
                                        You can create a Career Profile to get job suggestions, prepare for the
                                        interview process, and more.
                                    </span>
                                </div>
                                <div class="pt-2">
                                    <a class="buttoncreate" href="/">Create a Career Profile</a>
                                </div>
                                <div class="pt-3">
                                    <span class="subtitleoflogin">
                                        Already have a Career <br /> Profile?
                                    </span>
                                </div>
                                <div class="pt-2">
                                    <a class="logintext" href="/">Log in</a>
                                </div>
                            </div>
                        </div>
                        <div class=" logindrop " style="text-align: start;">
                            <div class="" style="border-top: 1px solid #c4c4c4;">
                                <div class="pt-3">
                                    <span class="titleofloginav">Create a Career Profile</span>
                                    <div class="pt-2">
                                        <span class="subtitleofloginav">
                                            You can create a Career Profile to get job suggestions, prepare for the
                                            interview process, and more.
                                        </span>
                                    </div>
                                    <div class="pt-2">
                                        <a class="buttoncreatenav " href="/">Create a Career Profile</a>
                                    </div>
                                    <div class="pt-3">
                                        <span class="subtitleofloginav">
                                            Already have a Career Profile?
                                        </span>
                                    </div>
                                    <div class="pt-2">
                                        <a class="logintext" href="/">Log in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="modalsearch" id="myModal1">
                    <div class="modal-contentsearch">
                        <div class="container">
                            <div class="searchcontent">
                                <span>
                                    <img src="./assets/img/searchbold.svg" width="30px !important" class="" alt="">
                                </span>

                                <div class="searchbox">
                                    <input placeholder="Search" class="searchinput">
                                </div>
                                <button class="close" onclick="toggleModal('close')"><svg width="20px" height="20x"
                                        viewBox="0 0 18 16">
                                        <g id="Syle-Guide" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd" stroke-linecap="square">
                                            <g id="Icon-Sheet" transform="translate(-173.000000, -48.000000)"
                                                stroke="#A7AAAE">
                                                <g id="Icons/Click-Out" transform="translate(174.000000, 48.000000)">
                                                    <g id="Path">
                                                        <path d="M16,0 L0,16"></path>
                                                        <path d="M0,0 L16,16"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>



    <div class="sticky-div" id="stickyDiv">
        <div class="container-xxl" style="">
            <div class="d-flex align-items-center px-lg-4" >
                <img src="./assets/img/loogo.svg" alt="">
                <span class="px-2 titleofproduct">Facebook</span>

            </div>
            <div class="row px-lg-4" style="align-items: center;">
                <div class="col-12 col-sm ">
                    <div class="mt-2 mt-sm-0">
                        <span class="subtitleofproduct">
                            Social Media Manager
                        </span>
                    </div>
                  
                </div>
                <div class="col-12 col-sm  ">
                    <div class="d-flex justify-content-xl-end ">
                        <div class="pt-4 px-lg-1 px-lg-3">
                            <svg width="30" height="30" viewBox="0 0 86 86" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17 15.2041C17 13.5536 17.6577 11.9711 18.8275 10.8068V10.8068C19.9901 9.64964 21.5638 9 23.2041 9H61.7959C63.4362 9 65.0099 9.64964 66.1725 10.8068V10.8068C67.3423 11.9711 68 13.5536 68 15.2041V71.7477C68 74.0695 65.4758 75.5112 63.4759 74.3317L42.5 61.9601L21.5241 74.3317C19.5242 75.5112 17 74.0695 17 71.7477V15.2041ZM24.2857 16.2514V64.2742L42.5 53.531L60.7143 64.2742V16.2514H24.2857Z"
                                    fill="white" />
                            </svg>
                        </div>
                       <a href="./form.php"> <button type="button" class="mx-2 mx-lg-0 buttonapply" 
                            >
                            Apply to Job
                        </button>
                    </a>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content" id="content">

        <div class="px-lg-2 infotextproduct" style="">
            <span class="textofsubtitle">
                The mission of Social Media Manager is to be the primary way that people and businesses communicate by
                enabling valuable conversations between people and businesses across WhatsApp, Instagram and Messenger.
                <br><br />

                We’re looking for an experienced Business Product Marketer to join our growing product development
                business product marketing team ("BPM-Dev"). You will be responsible for bringing in market insights,
                influencing product strategies, driving holistic go-to-market strategies to land and drive awareness and
                adoption of our products, and working cross-functionally up/down/across with partners throughout the
                company. If you are a strategic marketer who is a self-starter, analytical, and excel at leading complex
                projects especially in 0-1, fast-paced environments, then we’d like to connect with you.
            </span><br>
            <a href="./form.php"> <button type="button" class="mx-2 mx-lg-0 buttonapply2">
                            Apply to Job
                        </button>
                    </a>
            <div style="border-bottom: 1px solid #d3d4d8;margin-bottom: 55px;margin-top: 55px;">
            </div>
            <div style="margin-top: 50px;">
                <span class="textofmarketing">
                    Social Media Manager
                </span>
                <div style="margin-top: 10px;margin-left: 20px;padding: 0px 43px 0px 0px;">
                    <li style="   margin-top: 20px;">
                        <span class="subtextofmarketing">Influence and shape product strategies and roadmap based on
                            market
                            insights and
                            experience</span>
                    </li>
                    <li style="margin-top: 20px;">
                        <span class="subtextofmarketing">Lead development of target audiences, and positioning and
                            narratives to support those audiences based on data and insights.</span>
                    </li>
                    <li style="margin-top: 20px;">
                        <span class="subtextofmarketing">Develop and execute go-to-market strategies including
                            positioning,
                            pricing, promotions, measurement, asset development and integrated planning with
                            cross-functional partners.</span>
                    </li>
                    <li style="margin-top: 20px;">
                        <span class="subtextofmarketing">Partner with cross-functional stakeholders across product and
                            GTM
                            teams to drive awareness, adoption and retention of our solutions.</span>
                    </li>
                    <li style="margin-top: 20px;">
                        <span class="subtextofmarketing">Navigate a variety of internal and external stakeholders to
                            influence, align, and drive execution.</span>
                    </li>
                    <li style="margin-top: 20px;">
                        <span class="subtextofmarketing">Strategically tackle complex problems with frameworks and
                            thoughtful recommendations + action plans to solve them.</span>
                    </li>
                    <li style="margin-top: 20px;">
                        <span class="subtextofmarketing">Effectively communicate up and across the organization.</span>
                    </li>
                    <li style="margin-top: 20px;">
                        <span class="subtextofmarketing">Execute with agility to evolve with business needs</span>
                    </li>
                </div>
                <div style="margin-top: 50px;">
                    <span class="textofmarketing">
                        Minimum Qualifications
                    </span>
                </div>
                <div style="margin-top: 10px;margin-left: 20px;padding: 0px 43px 0px 0px;">
                    <li style="   margin-top: 20px;">
                        <span class="subtextofmarketing">BA/BS degree</span>
                    </li>
                    <li style="margin-top: 20px;">
                        <span class="subtextofmarketing">5+ years of experience working in Product Marketing, or related
                            industry experience.</span>
                    </li>
                    <li style="margin-top: 20px;">
                        <span class="subtextofmarketing">Proven communication and cross-functional leadership</span>
                    </li>
                </div>
                <div style="margin-top: 50px;">
                    <span class="textofmarketing">
                        Preferred Qualifications
                    </span>
                </div>
                <div style="margin-top: 10px;margin-left: 20px;padding: 0px 43px 0px 0px;">
                    <li style="   margin-top: 20px;">
                        <span class="subtextofmarketing">Experience in B2B GTM</span>
                    </li>
                </div>
                <div style="margin-top: 50px;">
                    <span class="textofmarketing">Locations</span>
                </div>

                <div style="margin-top: 50px;">
                    <span class="textofmarketing">About Meta</span>
                </div>
                <div style="margin-top: 10px;">
                    <span> <span class="textofsubtitle">
                            Meta builds technologies that help people connect, find communities, and grow businesses.
                            When
                            Facebook launched in 2004, it changed the way people connect. Apps like Messenger, Instagram
                            and
                            WhatsApp further empowered billions around the world. Now, Meta is moving beyond 2D screens
                            toward immersive experiences like augmented and virtual reality to help build the next
                            evolution
                            in social technology. People who choose to build their careers by building with us at Meta
                            help
                            shape a future that will take us beyond what digital connection makes possible today—beyond
                            the
                            constraints of screens, the limits of distance, and even the rules of physics.
                            <br><br />
                            Meta is committed to providing reasonable support (called accommodations) in our recruiting
                            processes for candidates with disabilities, long term conditions, mental health conditions
                            or
                            sincerely held religious beliefs, or who are neurodivergent or require pregnancy-related
                            support. If you need support, please reach out to <a href="" style="color:#00629A;"
                                rel="no-referrer">accommodations-ext@fb.com</a>
                            <br><br />
                            $128,000/year to $181,000/year + bonus + equity + benefits
                            <br><br />
                            Individual pay is determined by skills, qualifications, experience, and location.
                            Compensation
                            details listed in this posting reflect the base salary only, and do not include bonus,
                            equity or
                            sales incentives, if applicable. In addition to base salary, Meta offers benefits. Learn
                            more
                            about
                        </span></span>
                </div>
                <div style="border-bottom: 1px solid #d3d4d8;margin-bottom: 55px;margin-top: 55px;">
                </div>
                <div class="" style="margin-top: 50px;">
                    <span class="textofmarketing">Related Job Openings </span>
                    <div class="row mt-3">
                        <div class="col-12 col-md">
                            <div class="mb-2 mt-2">
                                <a class="titleofrelated" href="">Consumer Product Marketing Manager</a>
                            </div>
                            <span class="subtitleofrelated"> Menlo Park, CA + 2 More</span>

                            <div class="mb-2 mt-4 pt-4">
                                <a class="titleofrelated" href="">Influencer Marketing Manager, Reality Labs</a>
                            </div>
                            <span class="subtitleofrelated">Los Angeles, CA + 4 More</span>

                            <div class="mb-2 mt-4  pt-4">
                                <a class="titleofrelated" href="">Sales Process & Operations Lead, SSPO</a>
                            </div>
                            <span class="subtitleofrelated">Austin, TX + 3 More</span>

                        </div>
                        <div class="col-12 col-md">
                            <div class="mb-2">
                                <a class="titleofrelated" href="">Head of High Value Commerce Customer Success</a>
                            </div>
                            <span class="subtitleofrelated"> Menlo Park, CA + 2 More</span>

                            <div class="mb-2 mt-4">
                                <a class="titleofrelated" href="">Product Marketing Manager, Commerce Seller Experience
                                    -
                                    Shops Ads</a>
                            </div>
                            <span class="subtitleofrelated"> Menlo Park, CA + 2 More</span>

                            <div class="mb-2 mt-4">
                                <a class="titleofrelated" href="">Software Engineer, Infrastructure</a>
                            </div>
                            <span class="subtitleofrelated">Facebook | Sunnyvale, CA + 13 More</span>
                        </div>

                    </div>

                </div>

            </div>


        </div>
    </div>

    <div style="border-bottom: 1px solid #d3d4d8;margin-top: 55px;">
        <div class="footer">
            <div class="footerbox">
                <div class="footerboxtext">
                    <div>
                        <span class="subtextfooter">
                            Meta is proud to be an Equal Employment Opportunity and Affirmative Action employer. We
                            do not discriminate based upon race, religion, color, national origin, sex (including
                            pregnancy, childbirth, reproductive health decisions, or related medical conditions),
                            sexual orientation, gender identity, gender expression, age, status as a protected
                            veteran, status as an individual with a disability, genetic information, political views
                            or activity, or other applicable legally protected characteristics. You may view our
                            Equal Employment Opportunity notice <a style="color: #232323;" href="">here</a> We also
                            consider qualified
                            applicants with criminal histories, consistent with applicable federal, state and local law.
                            We may use your information to maintain the safety and security of Meta, its employees, and
                            others as required or permitted by law. You may view <a style="color: #232323;" href="">
                                Meta's Pay Transparency
                                Policy, </a> <a style="color: #232323;" href=""> Notice to Applicants for Employment and
                                Employees </a>
                            by clicking on their corresponding links. Additionally, Meta participates in the <a href=""
                                style="color: #232323;">
                                E-Verify program </a> in certain locations, as required by law.
                            <br><br />
                            Meta is committed to providing reasonable accommodations for qualified individuals with
                            disabilities and disabled veterans in our job application procedures. If you need assistance
                            or an accommodation due to a disability, you may contact us at <a style="color: #232323;"
                                href="">accommodations-ext@fb.com</a>
                        </span>
                    </div>
                </div>
                <div>
                    <div class="row mt-4 mt-xl-5 gx-5">
                        <div class="col-6 col-xl-auto">
                            <div>
                                <span class="bottomtextfooter">About Us</span>
                                <div>
                                    <a class="bottomfotersubtext" href="/">Company info</a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/">Newsroom</a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/">Careers FAQs</a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/">Looking for contractor roles?</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-auto">
                            <div>
                                <span class="bottomtextfooter">On Social</span>
                                <div>
                                    <a class="bottomfotersubtext" href="/">Facebook</a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/">Instagram</a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/">LinkedIn</a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/">Threads</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-4 mt-xl-0 col-xl-auto">
                            <div>
                                <span class="bottomtextfooter">Our policies</span>
                                <div>
                                    <a class="bottomfotersubtext" href="/"> Candidate privacy statement </a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/"> Cookies </a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/">LinkedIn</a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/"> Vaccination entry policy </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-4 mt-xl-0 col-xl-auto">
                            <div>
                                <span class="bottomtextfooter">More resources</span>
                                <div>
                                    <a class="bottomfotersubtext" href="/">Family safety center</a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/"> Meta for business </a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/">LinkedIn</a>
                                </div>
                                <div>
                                    <a class="bottomfotersubtext" href="/"> Meta for developers </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>