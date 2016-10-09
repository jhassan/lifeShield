<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>Lifeshield</title>



    <!-- Bootstrap Core CSS -->

    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    

    <link type="text/css" href="css/style.css"  rel="stylesheet">

    

    <link href="dist/css/jquery-ui.css" rel="stylesheet">



    <!-- MetisMenu CSS -->

    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">



    <!-- Timeline CSS -->

    <link href="dist/css/timeline.css" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="dist/css/sb-admin-2.css" rel="stylesheet">



    <!-- Morris Charts CSS -->

    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

    <style type="text/css">

    .clear { clear:both !important;}

	.error { color: #F00 !important; font-weight:normal;}

	.p-0 { padding:0px !important;}

	.m-b-0 { margin-bottom: 0px; }

	.p-l-0 { padding-left: 0px !important;}

	/*.txt-box { width: 91px !important; padding:0px !important;}*/

	.dir-right{ direction:rtl;}

	.m-t-0{ margin-top: 0px !important; }

	.m-t-5{ margin-top: 5px !important; }

	.m-t-10{ margin-top: 10px !important; }

	.m-t-15{ margin-top: 15px !important; }

	.m-l-0{ margin-left: 0px !important; }

	.m-l-5{ margin-left: 5px !important; }

	.m-l-10{ margin-left: 10px !important; }

	.m-l-15{ margin-left: 15px !important; }

	.m-l-20{ margin-left: 20px !important; }

	.m-r-0{ margin-left: 0px !important; }

	.m-r-5{ margin-left: 5px !important; }

	.m-r-10{ margin-left: 10px !important; }

	.m-r-15{ margin-left: 15px !important; }

	.m-r-20{ margin-left: 20px !important; }

	

		/* Base for label styling */

	[type="checkbox"]:not(:checked),

	[type="checkbox"]:checked {

	  position: absolute;

	  left: -9999px;

	}

	[type="checkbox"]:not(:checked) + label,

	[type="checkbox"]:checked + label {

	  position: relative;

	  padding-left: 25px;

	  cursor: pointer;

	}

	

	/* checkbox aspect */

	[type="checkbox"]:not(:checked) + label:before,

	[type="checkbox"]:checked + label:before {

	  content: '';

	  position: absolute;

	  left:0; top: 2px;

	  width: 17px; height: 17px;

	  border: 1px solid #aaa;

	  background: #f8f8f8;

	  border-radius: 3px;

	  box-shadow: inset 0 1px 3px rgba(0,0,0,.3)

	}

	/* checked mark aspect */

	[type="checkbox"]:not(:checked) + label:after,

	[type="checkbox"]:checked + label:after {

	  content: '✔';

	  position: absolute;

	  top: 3px; left: 4px;

	  font-size: 18px;

	  line-height: 0.8;

	  color: #09ad7e;

	  transition: all .2s;

	}

	/* checked mark aspect changes */

	[type="checkbox"]:not(:checked) + label:after {

	  opacity: 0;

	  transform: scale(0);

	}

	[type="checkbox"]:checked + label:after {

	  opacity: 1;

	  transform: scale(1);

	}

	/* disabled checkbox */

	[type="checkbox"]:disabled:not(:checked) + label:before,

	[type="checkbox"]:disabled:checked + label:before {

	  box-shadow: none;

	  border-color: #bbb;

	  background-color: #ddd;

	}

	[type="checkbox"]:disabled:checked + label:after {

	  color: #999;

	}

	[type="checkbox"]:disabled + label {

	  color: #aaa;

	}

	/* accessibility */

	[type="checkbox"]:checked:focus + label:before,

	[type="checkbox"]:not(:checked):focus + label:before {

	  border: 1px dotted blue;

	}

	

	/* hover style just for information */

	label:hover:before {

	  border: 1px solid #4778d9!important;

	}

	

	

	

	

	

	

	/* Useless styles, just for demo design */

	

	

	.txtcenter {

	  margin-top: 4em;

	  font-size: .9em;

	  text-align: center;

	  color: #aaa;

	}

	.copy {

	 margin-top: 2em; 

	}

	.copy a {

	 text-decoration: none;

	 color: #4778d9;

	}

    </style>

<script type="text/javascript"

     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">

    </script> 

    <script type="text/javascript"

     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">

    </script>

    <script type="text/javascript"

     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">

    </script>

    <script type="text/javascript"

     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">

    </script>

    <script type="text/javascript" src="js/custom.js"></script>

</head>

