

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from onlineupsida.com/land-requisition.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 05:29:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head id="Head1"><title>
	U.P. State Industrial Development Authority
</title><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" /><link rel="shortcut icon" type="image/upsidclogo.png" href="images/favicon-32x32.png" /><meta name="keywords" content="upsida" /><meta name="description" /><link rel="canonical" href="xyz.html" /><link href="css/style.css" rel="stylesheet" type="text/css" />
<!--style-->
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<!--responsive-->
<link href="css/animate.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" /><link rel="stylesheet" href="css/bootstrap-theme.min.css" /><link href="css/site.css" rel="stylesheet" type="text/css" />
    <style>
        #tblallotteeinf {
            box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
            padding: 26PX 30PX 30PX 30PX;
            BACKGROUND-COLOR: WHITE;
            margin-left: auto;
            width: 50%;
            margin-right: auto;
            border-radius: 20px;
        }

        .panel-heading {
            padding: 9px;
            font-weight: 800;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            text-align: center;
        }

        input.similar-select1 {
            margin: 0 0 0 0;
            background: #ffffff;
            height: 32px;
            border: 1px solid #ccc;
            padding: 3px;
        }

        .similar-select1 {
            width: 100%;
            border-radius: 0px !important;
            height: 32px;
            border: 1px solid #ccc;
            padding: 3px;
        }

        .form-group {
            margin-top: 1rem;
        }

        .ui-dialog .ui-dialog-titlebar {
            padding: .4em 1em;
            position: relative;
            background: #D8D8D8 !important;
            border-color: #D8D8D8 !important;
        }

        .ui-dialog .ui-dialog-title {
            font-family: serif !important;
            color: black;
        }

        .ui-dialog {
            top: 130% !important;
        }

            .ui-dialog .ui-dialog-buttonpane button {
                background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#4c5568), to(#414959)) !important;
                border: 1px solid #fff !important;
                font-weight: normal !important;
                padding: 5px 10px !important;
                font-size: 12px !important;
                line-height: 1.5 !important;
                color: #fff !important;
            }

            .ui-dialog .ui-dialog-titlebar-close span {
                color: black !important;
            }

        .prevent-select {
            -webkit-user-select: none; /* Safari */
            -ms-user-select: none; /* IE 10 and IE 11 */
            user-select: none; /* Standard syntax */
        }

        @media (max-width: 1320px) {
            #tblallotteeinf {
                box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
                padding: 26PX 30PX 30PX 30PX;
                BACKGROUND-COLOR: WHITE;
                margin-left: auto;
                width: 100%;
                margin-right: auto;
            }
        }
    </style>

    <title></title>
    <script src="js/ajax-jquery-min.html"></script>
    <script src="js/ajax-jquery-ui.html"></script>
    <script src="js/jquery1.html"></script>
    <script src="js/jquery.html"></script>
    <script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.html"></script>
    <script src="js/jquery-ui.html"></script>
    <script src="js/chosen.jquery.min.html"></script>
    <script type="text/javascript">
        $(function () {
            $(document).on('input', 'input', function (e) {
                var keyCode = e.keyCode || e.which;

                //  $("#lblError").html("");

                //Regex for Valid Characters i.e. Alphabets and Numbers.
                var regex = /^[. @/A-Za-z0-9]+$/;

                //Validate TextBox value against the Regex.
                var value = this.value;
                var isValid = regex.test(value);
                if (!isValid && this.value != '') {
                    //  $("#lblError").html("Only Alphabets and Numbers allowed.");
                    // alert("Special Character Not Allowed");
                    e.preventDefault();
                }
                var newValue = '';
                for (var i = 0; i < value.length; i++) {
                    if (regex.test(value[i]) || value[i] == '') {
                        newValue += value[i];
                    }
                }
                this.value = newValue;

                return isValid;
            });
        });


        $(document).on('keypress', 'textarea', function (event) {
            var regex = new RegExp("^[. @/A-Za-z0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });


        var myFile = "";


        $(document).on('change', 'INPUT[type="file"]', function () {

            myFile = $('INPUT[type="file"]').val();
            console.log(myFile);
            var upld = myFile.split('.').pop();
            if (upld != 'pdf') {
                alert("Only PDF are allowed");
                $('INPUT[type="file"]').val('');
                // alert("File uploaded is pdf");

            } else {



            }

        });
    </script>

    <script type="text/javascript">

        function ShowPopup(message) {
            $(function () {
                $("#dialog").html(message);
                $("#dialog").dialog({
                    title: "Alert",
                    buttons: {
                        Close: function () {
                            $(this).dialog('close');
                        }
                    },
                    modal: true
                });
            });
        };

        function ValidateIndividualEmail() {
            var email = document.getElementById("ContentPlaceHolder1_txtEmail").value;
            if (email.length > 0) {
                if (!IsValidEmail(email)) {

                    ShowPopup("<img src='/images/alert.jpg' width='38' height='38'> &nbsp;&nbsp;<span style='font-family:serif !important'>Invalid Email Id</span>");
                    document.getElementById("ContentPlaceHolder1_txtEmail").value = "";
                    document.getElementById("ContentPlaceHolder1_txtEmail").style.borderColor = '#e52213';

                    return false;

                }
                else {

                    document.getElementById("ContentPlaceHolder1_txtEmail").style.borderColor = "";
                    return true;
                }
            }
        }





        function IsValidEmail(email) {
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            return expr.test(email);
        };





        function isDecimalKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57)) {
                return false;
            } else {


            }
        }



    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            Sys.WebForms.PageRequestManager.getInstance().add_pageLoaded(PageLoaded)
        });

        function PageLoaded(sender, args) {
            $(".chosen").chosen();

            $(".MultiSelect").chosen(



            );
        }

    </script>
    <script>
        window.addEventListener('contextmenu', function (e) {
            alert("Function Disabled!");
            e.preventDefault();
        },
        false);
    </script>

</head>
<body>
    <form method="post" action="https://onlineupsida.com/land-requisition.aspx" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTcwMzU2ODIxNw8WAh4CSURmFgJmD2QWAgIDD2QWAgIBD2QWBAIDD2QWAmYPZBYCAgEPEA8WBh4NRGF0YVRleHRGaWVsZAUPQ2Vuc3VzX0Rpc3RyaWN0Hg5EYXRhVmFsdWVGaWVsZAUUQ2Vuc3VzX0Rpc3RyaWN0X2NvZGUeC18hRGF0YUJvdW5kZ2QQFUgKLS1TZWxlY3QtLQRBZ3JhB0FsaWdhcmgKQWxsYWhhYmFkIA5BbWJlZGthciBOYWdhcgdBdXJhaXlhCEF6YW1nYXJoB0JhZ2hwYXQIQmFocmFpY2gGQmFsbGlhCUJhbHJhbXB1cgVCYW5kYQpCYXJhIEJhbmtpCEJhcmVpbGx5BUJhc3RpBkJpam5vcgZCdWRhdW4MQnVsYW5kc2hhaHIgCUNoYW5kYXVsaQpDaGl0cmFrb290BkRlb3JpYQRFdGFoBkV0YXdhaAhGYWl6YWJhZAtGYXJydWtoYWJhZAhGYXRlaHB1cglGaXJvemFiYWQTR2F1dGFtIEJ1ZGRoYSBOYWdhcglHaGF6aWFiYWQIR2hhemlwdXIFR29uZGEJR29yYWtocHVyCEhhbWlycHVyBkhhcmRvaQdKYWxhdW4gB0phdW5wdXIGSmhhbnNpE0p5b3RpYmEgUGh1bGUgTmFnYXIHS2FubmF1agxLYW5wdXIgRGVoYXQMS2FucHVyIE5hZ2FyD0thbnNoaXJhbSBOYWdhcglLYXVzaGFtYmkFS2hlcmkKS3VzaGluYWdhcghMYWxpdHB1cgdMdWNrbm93Dk1haGFtYXlhIE5hZ2FyBk1haG9iYQpNYWhyYWpnYW5qCE1haW5wdXJpB01hdGh1cmEDTWF1Bk1lZXJ1dAhNaXJ6YXB1cglNb3JhZGFiYWQNTXV6YWZmYXJuYWdhcghQaWxpYmhpdApQcmF0YXBnYXJoClJhZSBCYXJlbGkGUmFtcHVyClNhaGFyYW5wdXIQU2FudCBLYWJpciBOYWdhchxTYW50IFJhdmlkYXMgTmFnYXIgKEJoYWRvaGkpDFNoYWhqYWhhbnB1cglTaHJhd2FzdGkOU2lkZGhhcnRobmFnYXIHU2l0YXB1cglTb25iaGFkcmEJU3VsdGFucHVyBVVubmFvCFZhcmFuYXNpFUgBMAMxNDYDMTQzAzE3NQMxNzgDMTYyAzE5MQMxMzkDMTgwAzE5MwMxODIDMTcwAzE3NgMxNTADMTg1AzEzNAMxNDkDMTQyAzE5NgMxNzEDMTkwAzIwMQMxNjEDMTc3AzE1OQMxNzIDMTQ3AzE0MQMxNDADMTk1AzE4MwMxODgDMTY4AzE1NQMxNjUDMTk0AzE2NgMxMzcDMTYwAzE2MwMxNjQDMjAyAzE3NAMxNTMDMTg5AzE2NwMxNTcDMTQ0AzE2OQMxODcDMTQ4AzE0NQMxOTIDMTM4AzE5OQMxMzUDMTMzAzE1MQMxNzMDMTU4AzEzNgMxMzIDMTg2AzE5OAMxNTIDMTgxAzE4NAMxNTQDMjAwAzE3OQMxNTYDMTk3FCsDSGdnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZxYBZmQCCw8QDxYGHwEFC0NvdW50cnlOYW1lHwIFCUNvdW50cnlJZB8DZ2QQFQIKLS1TZWxlY3QtLQVJbmRpYRUCATABMRQrAwJnZxYBZmRkPqRgcX+9+NkMxK5PiMzBX8PKPe+3KfCt9Ds/v8S+Yq0=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="WebResource324f.js?d=gwZQoEMGBulo0KjJCJbaU9gmj5uGv5NHrctUY1sfLpJIfAo4w5Jh6KcmYKlAHTs3sonqy8OS_r7hoAWp9o3ocOLZO4kj3u9xcFtTxtbYRSg1&amp;t=637823563837077270" type="text/javascript"></script>


<script src="ScriptResource0896.js?d=nCaC3RrALx67pdZJ_tjV1B3m0t6JNUoHV27tkHMrPqctHoeCR5VrwZL03_sIZd-Bkn91jBDf-Mab9CJrp1f1Ica_LMqOnVrKnkOtYORnSmybbhxNNRBFiG6a53sg0YF46uob8YFrsWZ3BGLh7JsM6YCTdWktKk_ZiVjvoSBJGDZjoI1MCQ7g7ropwxDUER3i0&amp;t=ffffffffaa493ab8" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="ScriptResource3913.js?d=0L5uEADdvOqbhOGzkKz4anBJIoDhSxx2mXapd7nStyyqQHERPE0XcXQGdbquNtyftggJR9jPQ2qi5Z9F9Y_ThJR4n4rAxS0ekpULQedwI_LlQeRj7YVH9Bh3qy0nr8loflXkWLkjlBVIV6A3Zgzmb5LHyHtT6R5KXO2tJT8RBHah0nzBGyJyz9HgE1-EPQdi0&amp;t=ffffffffaa493ab8" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="1E7D7DF6" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="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" />
</div>
    <div id="page-warpper">
<header class="header fixed-top" id="myHeader">
  <div class="container-fluid">
    <div class="logo" style="padding: 0px;"><a href="Default.html" class="external selected"><img src="images/logo-color.png" class="img-responsive uplogo" alt="Logo of UPSIDA Department" title="Uttar Pradesh UPSIDA"> </a></div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="Default.html"><img src="images/logo-2.jpg"  alt="Logo of UPSIDA Department"></a>
      <button class="navbar-toggler justify-content-left " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
     
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"> <a class="nav-link" href="Default.html">Home <span class="sr-only">(current)</span></a> </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="about.html">About Department</a> 
                <a class="dropdown-item" href="layout.html">Layout Plans</a> 
             <a class="dropdown-item" href="policies.html">Our Policies</a> 
             <a class="dropdown-item" href="https://gis.onlineupsidc.com/" target="_blank">GIS System</a>
             <a class="dropdown-item" href="brand-association.html">Brand Partners</a>
                 <a class="dropdown-item" href="organizational-structure.html">Organizational Structure</a> 
                 <a class="dropdown-item" href="whos-who.html">Who's Who</a> 
              <a class="dropdown-item" href="pdf/Holiday-calendar-2023.pdf" target="_blank">Holiday Calendar</a> 
              
            </div>
          </li>
         <!-- <li class="nav-item"> <a class="nav-link " href="http://eservices.onlineupsidc.com/" target="_blank">E-Services</a> </li>-->

            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Online Services</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://eservices.onlineupsidc.com/" target="_blank">E-Services</a> 
             <a class="dropdown-item" href="https://eservices.onlineupsidc.com/AllotteePanel/AllotteeLogin.aspx" target="_blank">Outstanding Dues Payment</a> 
            <a class="dropdown-item" href="https://niveshmitra.up.nic.in/" target="_blank">Nivesh Mitra</a> 

                
            </div>
          </li>


          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Available Plots</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://eservices.onlineupsidc.com/Advertisement.aspx" target="_blank">Available Plot List in Nivesh Mitra </a> 
             <a class="dropdown-item" href="http://eservices.onlineupsidc.com/PropertyHub/Index.aspx" target="_blank">Land Bank Of UPSIDA</a> 
            <a class="dropdown-item" href="https://eauction.etender.sbi/SBI" target="_blank">Plots in E-Auction</a>
                 <!--<a class="dropdown-item" href="available-plot/Available_Plots.aspx" target="_blank">RO wise Available Plot</a>-->
            </div>
          </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="A5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notices</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				
                <a class="dropdown-item" href="news.html">News</a> 
                <a class="dropdown-item" href="tenders.html">UPSIDA Tenders</a>
                <a class="dropdown-item" href="office-order.html">Office Orders</a>
                <a class="dropdown-item" href="newsletter-upsida.html">News Letters</a>
                <a class="dropdown-item" href="press-release.html">Press Release</a>
                <a class="dropdown-item" href="eauction.html">E-Auction</a>
                <a class="dropdown-item" href="gos.html">GO's</a> 
                <a class="dropdown-item" href="https://etender.up.nic.in/nicgep/app" target="_blank">E-Tender Website</a>
                <a class="dropdown-item" href="http://shasanadesh.up.gov.in/" target="_blank">UP Shasanadesh</a>
                <a class="dropdown-item" href="catalogue.html">Catalogs</a>
            </div>
          </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="A6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RTI</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="right-info-act.html">Right to Information Act 2005</a> 
                <a class="dropdown-item" href="appellate-officer.html">Appellate Officer</a>
                <a class="dropdown-item" href="public-info-officer.html">Public Information Officer</a>

            </div>
          </li>

            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="A3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="gallery.html">Photo Gallery</a>
                <a class="dropdown-item" href="videos.html">Video Gallery</a>

            </div>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="A1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="head-office.html">Head Office</a>
                 <a class="dropdown-item" href="regional-office.html">Regional Office</a>
                 <a class="dropdown-item" href="division-office.html">Division Office</a> 
		
</div>
          </li>
          
           
       
         
             <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="A1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Investor Corner</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="investor-feedback.html">Investor Feedback</a>
                 <a class="dropdown-item" href="land-requisition.html">Investor Intent</a>
</div>
          </li>

            <li class="nav-item web-mail"> <a class="nav-link " href="http://webmail.upsida.co.in/" target="_blank">Web Mail</a> </li>
            <li class="nav-item web-admin"> <a class="nav-link " href="website-dashboard/login.html" target="_blank">Web Login</a> </li>

             
            
            
              <li class=" nav-item button-new" data-toggle="modal" data-target="#myModal">MENU</li>
        
        </ul>
       
      </div>
    </nav>
  </div>
</header>
        
    <div class="prevent-select" id="01" ondragstart="return false;" ondrop="return false;">
        <section class="in-banner1" id="main-content">
            <div class="inheading">
                <div class="container">
                    <h2>Investor Intent Form</h2>
                    <div class="breed-crum-div">
                        <ol class="breadcrumb">
                            <li><a href="Default.html" class="none">Home</a></li>
                            <li>| </li>
                            <li class="active">Investor Intent Form</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="contentarea container-fluid leader leader3">

            <div class="col-md-12">
                <div class="">
                    <div class="">
                        <div class="row">
                            <div class="col-md-3">
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="panel-body">
                        <div id="tblallotteeinf">
                            <p class="panel-heading"><b>Applicant Profile </b></p>
                            <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ContentPlaceHolder1$ScriptManager1', 'form1', ['tctl00$ContentPlaceHolder1$upSetSession','ContentPlaceHolder1_upSetSession','tctl00$ContentPlaceHolder1$UpdatePanel1','ContentPlaceHolder1_UpdatePanel1'], ['ctl00$ContentPlaceHolder1$ddlDistrict','ContentPlaceHolder1_ddlDistrict','ctl00$ContentPlaceHolder1$ddlSubDistrict','ContentPlaceHolder1_ddlSubDistrict'], [], 90, 'ctl00');
//]]>
</script>


                            <div class="form-group">
                                <div class="row">

                                    <label class="col-md-6">
                                        <span style="color: Red">*</span>
                                        Desired District :
                                                   
                                    </label>
                                    <div class="col-md-6">

                                        <div id="ContentPlaceHolder1_upSetSession">
	
                                                <select name="ctl00$ContentPlaceHolder1$ddlDistrict" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$ddlDistrict\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlaceHolder1_ddlDistrict" class="similar-select1 margin-left-z dropdown-toggle input-sm">
		<option selected="selected" value="0">--Select--</option>
		<option value="146">Agra</option>
		<option value="143">Aligarh</option>
		<option value="175">Allahabad </option>
		<option value="178">Ambedkar Nagar</option>
		<option value="162">Auraiya</option>
		<option value="191">Azamgarh</option>
		<option value="139">Baghpat</option>
		<option value="180">Bahraich</option>
		<option value="193">Ballia</option>
		<option value="182">Balrampur</option>
		<option value="170">Banda</option>
		<option value="176">Bara Banki</option>
		<option value="150">Bareilly</option>
		<option value="185">Basti</option>
		<option value="134">Bijnor</option>
		<option value="149">Budaun</option>
		<option value="142">Bulandshahr </option>
		<option value="196">Chandauli</option>
		<option value="171">Chitrakoot</option>
		<option value="190">Deoria</option>
		<option value="201">Etah</option>
		<option value="161">Etawah</option>
		<option value="177">Faizabad</option>
		<option value="159">Farrukhabad</option>
		<option value="172">Fatehpur</option>
		<option value="147">Firozabad</option>
		<option value="141">Gautam Buddha Nagar</option>
		<option value="140">Ghaziabad</option>
		<option value="195">Ghazipur</option>
		<option value="183">Gonda</option>
		<option value="188">Gorakhpur</option>
		<option value="168">Hamirpur</option>
		<option value="155">Hardoi</option>
		<option value="165">Jalaun </option>
		<option value="194">Jaunpur</option>
		<option value="166">Jhansi</option>
		<option value="137">Jyotiba Phule Nagar</option>
		<option value="160">Kannauj</option>
		<option value="163">Kanpur Dehat</option>
		<option value="164">Kanpur Nagar</option>
		<option value="202">Kanshiram Nagar</option>
		<option value="174">Kaushambi</option>
		<option value="153">Kheri</option>
		<option value="189">Kushinagar</option>
		<option value="167">Lalitpur</option>
		<option value="157">Lucknow</option>
		<option value="144">Mahamaya Nagar</option>
		<option value="169">Mahoba</option>
		<option value="187">Mahrajganj</option>
		<option value="148">Mainpuri</option>
		<option value="145">Mathura</option>
		<option value="192">Mau</option>
		<option value="138">Meerut</option>
		<option value="199">Mirzapur</option>
		<option value="135">Moradabad</option>
		<option value="133">Muzaffarnagar</option>
		<option value="151">Pilibhit</option>
		<option value="173">Pratapgarh</option>
		<option value="158">Rae Bareli</option>
		<option value="136">Rampur</option>
		<option value="132">Saharanpur</option>
		<option value="186">Sant Kabir Nagar</option>
		<option value="198">Sant Ravidas Nagar (Bhadohi)</option>
		<option value="152">Shahjahanpur</option>
		<option value="181">Shrawasti</option>
		<option value="184">Siddharthnagar</option>
		<option value="154">Sitapur</option>
		<option value="200">Sonbhadra</option>
		<option value="179">Sultanpur</option>
		<option value="156">Unnao</option>
		<option value="197">Varanasi</option>

	</select>
                                            
</div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-6">
                                        <span style="color: Red">*</span>
                                        Desired Sub District :
                                                   
                                    </label>
                                    <div class="col-md-6">
                                        <div id="ContentPlaceHolder1_UpdatePanel1">
	
                                                <select name="ctl00$ContentPlaceHolder1$ddlSubDistrict" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$ddlSubDistrict\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlaceHolder1_ddlSubDistrict" class="similar-select1 margin-left-z dropdown-toggle input-sm">

	</select>
                                            
</div>
                                    </div>
                                </div>
                            </div>


                            <div class="clearfix"></div>

                            <div class="form-group">
                                <div class="row">

                                    <label class="col-md-6">
                                        <span style="color: Red">*</span>
                                        Name of Investor :
                                                   
                                    </label>
                                    <div class="col-md-6">
                                        <input name="ctl00$ContentPlaceHolder1$txtInvestorName" type="text" id="ContentPlaceHolder1_txtInvestorName" class="similar-select1 input-sm" Autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>


                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-6">
                                        <span style="color: Red">*</span>
                                        Address :
                                                   
                                    </label>
                                    <div class="col-md-6">
                                        <input name="ctl00$ContentPlaceHolder1$txtAddress" type="text" id="ContentPlaceHolder1_txtAddress" class="similar-select1 input-sm" Autocomplete="off" />
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>


                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-6">
                                        <span style="color: Red">*</span>
                                        Country:
                                                        
                                                   
                                    </label>
                                    <div class="col-md-6">
                                        
                                                <select name="ctl00$ContentPlaceHolder1$ddlCountry" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$ddlCountry\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlaceHolder1_ddlCountry" class="similar-select1 input-sm">
	<option selected="selected" value="0">--Select--</option>
	<option value="1">India</option>

</select>
                                           
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-6">
                                        <span style="color: Red">*</span>
                                        State:
                                                   
                                    </label>
                                    <div class="col-md-6">
                                        
                                                <select name="ctl00$ContentPlaceHolder1$ddlState" id="ContentPlaceHolder1_ddlState" class="similar-select1 input-sm">

</select>
                                           
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>


                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-6">
                                        <span style="color: Red">*</span>
                                        City:
                                                   
                                    </label>
                                    <div class="col-md-6">
                                        <input name="ctl00$ContentPlaceHolder1$txtcity" type="text" id="ContentPlaceHolder1_txtcity" class="similar-select1 input-sm" Autocomplete="off" />
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-6">
                                        <span style="color: Red">*</span>
                                        Mobile No.:
                                                   
                                    </label>
                                    <div class="col-md-6">
                                        <input name="ctl00$ContentPlaceHolder1$txtMobileNo" type="text" maxlength="10" id="ContentPlaceHolder1_txtMobileNo" class="similar-select1 input-sm" onkeypress="return isDecimalKey(event);" Autocomplete="off" />
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-6">
                                        <span style="color: Red">*</span>
                                        E-mail :
                                                   
                                    </label>
                                    <div class="col-md-6">
                                        <input name="ctl00$ContentPlaceHolder1$txtEmail" type="text" id="ContentPlaceHolder1_txtEmail" class="similar-select1 input-sm" onblur="return ValidateIndividualEmail();" Autocomplete="off" />
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>


                            <div id="tblcompanyprofile">
                                <p class="panel-heading"><b>Existing Company details</b></p>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-6">
                                            <span style="color: Red">*</span>
                                            Address of Present unit :
                                                   
                                        </label>
                                        <div class="col-md-6">
                                            <input name="ctl00$ContentPlaceHolder1$txtAddressofPresentunit" type="text" id="ContentPlaceHolder1_txtAddressofPresentunit" class="similar-select1 input-sm" Autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-6">
                                            <span style="color: Red">*</span>

                                            Annual Turnover :
                                                   
                                        </label>
                                        <div class="col-md-6">
                                            <input name="ctl00$ContentPlaceHolder1$txtAnnualTurnover" type="text" id="ContentPlaceHolder1_txtAnnualTurnover" class="similar-select1 input-sm" Autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-6">
                                            <span style="color: Red">*</span>
                                            Plot area of unit:
                                                   
                                        </label>
                                        <div class="col-md-6">
                                            <input name="ctl00$ContentPlaceHolder1$txtPlotareaofunit" type="text" id="ContentPlaceHolder1_txtPlotareaofunit" class="similar-select1 input-sm" Autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-6">
                                            <span style="color: Red">*</span>
                                            F.S.I. Consumed :
                                                   
                                        </label>
                                        <div class="col-md-6">
                                            <input name="ctl00$ContentPlaceHolder1$txtFSIConsumed" type="text" id="ContentPlaceHolder1_txtFSIConsumed" class="input-sm similar-select1" Autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-6">
                                            <span style="color: Red">*</span>
                                            Water Consumed :
                                                   
                                        </label>
                                        <div class="col-md-6">
                                            <input name="ctl00$ContentPlaceHolder1$txtWaterConsumed" type="text" id="ContentPlaceHolder1_txtWaterConsumed" class="input-sm similar-select1" Autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-6">
                                            <span style="color: Red">*</span>
                                            Employment Generated :
                                                   
                                        </label>
                                        <div class="col-md-6">
                                            <input name="ctl00$ContentPlaceHolder1$txtEmploymentGenerated" type="text" id="ContentPlaceHolder1_txtEmploymentGenerated" class="input-sm similar-select1" Autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-6">
                                            Remarks :
                                                   
                                        </label>
                                        <div class="col-md-6">
                                            <input name="ctl00$ContentPlaceHolder1$txtRemarks" type="text" id="ContentPlaceHolder1_txtRemarks" class="input-sm similar-select1" Autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>


                                <div id="tblProjectDetails">
                                    <p class="panel-heading"><b>Proposed Project Details</b></p>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Nature of Project :
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtNatureofProject" type="text" id="ContentPlaceHolder1_txtNatureofProject" class="input-sm similar-select1 margin-left-z" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Raw Material :
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtRawMaterial" type="text" id="ContentPlaceHolder1_txtRawMaterial" class="input-sm similar-select1 margin-left-z" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Proposed Product :
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtParposedProduct1" type="text" id="ContentPlaceHolder1_txtParposedProduct1" class="input-sm similar-select1 margin-left-z" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Finance Agreement- self / Bank / FDI / Others :
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtFinanceAgreement" type="text" id="ContentPlaceHolder1_txtFinanceAgreement" class="input-sm similar-select1 margin-left-z" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Total Project Cost :
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtTotalProjectCost" type="text" id="ContentPlaceHolder1_txtTotalProjectCost" class="input-sm similar-select1 margin-left-z" onkeypress="return isDecimalKey(event);" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Built up Area :
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtBuiltupArea" type="text" id="ContentPlaceHolder1_txtBuiltupArea" class="input-sm similar-select1 margin-left-z" onkeypress="return isDecimalKey(event);" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Water requirement-Domestic/Industrial:
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtWaterrequirement" type="text" id="ContentPlaceHolder1_txtWaterrequirement" class="input-sm similar-select1 margin-left-z" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Total No. of Employees-Skilled/Unskilled:
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtTotalNoofEmployees" type="text" id="ContentPlaceHolder1_txtTotalNoofEmployees" class="input-sm similar-select1 margin-left-z" onkeypress="return isDecimalKey(event);" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>



                                    <p class="panel-heading font-bold"><b>Land Requirement Details</b></p>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Industry Type:
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtIndustryType" type="text" id="ContentPlaceHolder1_txtIndustryType" class="input-sm similar-select1" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Manufacturing Activity:
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtManufacturingActivity" type="text" id="ContentPlaceHolder1_txtManufacturingActivity" class="input-sm similar-select1" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Preferred Location:
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtPreferredLocation" type="text" id="ContentPlaceHolder1_txtPreferredLocation" class="input-sm similar-select1" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-6">
                                                <span style="color: Red">*</span>
                                                Required Land Size in Sq Mtr.:
                                                       
                                            </label>
                                            <div class="col-md-6">
                                                <input name="ctl00$ContentPlaceHolder1$txtRequiredLandSizeinSqMtr" type="text" id="ContentPlaceHolder1_txtRequiredLandSizeinSqMtr" class="input-sm similar-select1" onkeypress="return isDecimalKey(event);" Autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div id="mandatory" class="form-group" style="margin-top: 15px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span style="color: blue" class="pull-left"> Field marked with <span style="color: Red">*</span> are mandatory</span>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnSubmit" value="Save" id="ContentPlaceHolder1_btnSubmit" class="btn btn-primary" style="margin: 0 1px 0 0; width: 65px;" />
                                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnReset" value="Reset" id="ContentPlaceHolder1_btnReset" class="btn btn-danger " style="margin: 0; width: 65px;" />
                                        
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    
<?php
include "include/footer.php";
?>