@extends('layout.app')
@section('appContents')
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Inter', sans-serif;
            background:url('/images/Bg.jpeg') no-repeat;
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
#heading{
    color: black;
    font-size: 28px;

    padding: 4px 2px;
}
    </style>
</head>
<body>
    <div class="contents">
            <p id="heading"><b>Welcome to the Virat Kohli Website!</b></p>
        <p class="para">
            Celebrating the Journey of a Cricketing Maestro
            Welcome to the digital home of Virat Kohli, where the legacy of a cricketing legend unfolds. Dive into the world of passion, perseverance, and unparalleled sportsmanship.

            <br>Explore Virat's Universe
            Discover His Story
            <br>
            Embark on a captivating journey tracing Virat Kohli's evolution from a determined youngster with a cricket bat to a global icon revered for his on-field mastery.

        <p class="para">Achievements Galore<br>
            Witness the records shattered, milestones conquered, and the countless moments that define Virat Kohli's unparalleled legacy in cricket history.
        </p>
        <p class="para">Leadership & Inspiration<br>
            Delve into the leadership qualities that set Virat apart, inspiring not just victories but a generation of aspiring athletes.
        </p>
        <p class="para">Beyond Cricket<br>
            Uncover Virat's multifaceted persona—from his fitness advocacy and philanthropic endeavors to his ventures beyond the cricket field.

            Join the Celebration
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
