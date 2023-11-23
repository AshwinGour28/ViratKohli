@extends('layout.app')
@section('appContents')
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Inter', sans-serif;
            background:url('https://staticg.sportskeeda.com/editor/2020/06/d81b7-15913514877448-800.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }
        .contents{
            display:flex;
            flex-direction: column;
            width:50%;
            margin:25px 0px;

        }
        /* Styles to position the image at the top-right corner */
.content {
  position: relative;
  /* Ensure the content area has a relative position */
  padding-top: 10px; /* Adjust this value to create space for the image */
}

.corner-image {
    position: absolute;
    top: -447px;
    right: 47px;
    max-width: 562px;
    height: auto;
}
.contents p{
    margin:12px 10px;
}
    </style>
</head>
<body>
    <div class="contents">
        <p class="para">
            Virat Kohli is an Indian international cricketer widely regarded as one of the finest batsmen in the world. Born on November 5, 1988, in Delhi, India, Kohli made his debut for the Indian cricket team in 2008. He quickly gained attention for his exceptional batting skills, determination, and leadership qualities.

        <p class="para">Kohli is known for his aggressive style of play, remarkable consistency, and ability to chase down targets under pressure. He has set numerous records across all formats of the game and has established himself as a modern-day cricketing legend.
        </p>
        <p>In 2013, Kohli was appointed the vice-captain of the Indian team and later became the captain across formats. Under his leadership, India achieved significant milestones, including historic Test series victories in Australia and other notable triumphs.
        </p>
        <p class="para">Off the field, Kohli is recognized for his fitness regimen and commitment to a healthy lifestyle, setting new standards for professional athletes. His dedication to the sport, both physically and mentally, has inspired countless fans globally.
        </p>
        <p class="para">Kohli's impact on the cricketing world extends beyond his on-field performances. He's an influential figure and a role model for aspiring cricketers, admired for his passion, work ethic, and philanthropic endeavors.
        </p>

    </div>
    {{-- <div class="content">
        <img src="https://www.mykhel.com/img/2020/01/virat-kohli-cropped-1579060838.jpg" alt="Image Description" class="corner-image">
        <!-- Other content of your webpage goes here -->
      </div> --}}
</body>
@endsection
