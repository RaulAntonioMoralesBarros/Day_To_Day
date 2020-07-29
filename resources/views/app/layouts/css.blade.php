   <!--=================================================>
	<===================| THEME STYLES |=================>
	<==================================================-->

   <link href="{{ URL::asset('https://use.fontawesome.com/releases/v5.0.6/css/all.css') }}" rel="stylesheet" />
   <link href="{{ URL::asset('../css/bootstrap.min.css') }}" rel="stylesheet" />
   <link href="{{ URL::asset('../styles/shards-dashboards.1.1.0.min.css') }}" rel="stylesheet" />
   <link href="{{ URL::asset('../styles/extras.1.1.0.min.css') }}" rel="stylesheet" />
   <link href="{{ URL::asset('../css/responsive.dataTables.min.css') }}" rel="stylesheet" />
   <link href="{{ URL::asset('../css/quill.snow.css') }}" rel="stylesheet" />
   <link href="{{ URL::asset('https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css') }}" rel="stylesheet" type="text/css" />

   <!--=============[ Google fonts ]=============-->
   <link href="{{ URL::asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet" />

   <!--=============[ emoji]=============-->
   <link href="{{ URL::asset('https://emoji-css.afeld.me/emoji.css') }}" rel="stylesheet" />
   <link href="{{ URL::asset('../css/jquery.fancybox.min.css') }}" rel="stylesheet" />


   <style>
       #demo {
           height: 100%;
           position: relative;
           overflow: hidden;
       }


       .green {
           background-color: #6fb936;
       }

       .thumb {
           margin-bottom: 30px;
       }

       .page-top {
           margin-top: 85px;
       }


       img.zoom {
           width: 100%;
           height: 200px;
           border-radius: 5px;
           object-fit: cover;
           -webkit-transition: all .3s ease-in-out;
           -moz-transition: all .3s ease-in-out;
           -o-transition: all .3s ease-in-out;
           -ms-transition: all .3s ease-in-out;
       }


       .transition {
           -webkit-transform: scale(1.2);
           -moz-transform: scale(1.2);
           -o-transform: scale(1.2);
           transform: scale(1.2);
       }

       .modal-header {

           border-bottom: none;
       }

       .modal-title {
           color: #000;
       }

       .modal-footer {
           display: none;
       }

   </style>
