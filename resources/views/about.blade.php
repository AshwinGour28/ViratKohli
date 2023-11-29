@extends('layout.app')
@section('appContents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <style>
        .sub-head {
            width: 96%;
            margin-bottom: 25px;
            margin-right: auto;
            margin-left: auto;
            text-align: center;
            font-weight: 600;
            font-family: serif;
            font-size: 28px;
        }
        .about{
            line-height: 1.5;
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
            width: 96%;
            margin: 20px;
            padding-right: 20%;
            padding-left: 20%;
            text-align: justify;
        }
        img{
            display: block;
            margin:auto;
        }
    </style>
</head>
<body>
    <h2 class="sub-head">Early Life and Family</h2>

    <p class="about">Born on November 5, 1988, in Delhi, India, Virat Kohli's passion for cricket ignited at an early age. His father, Prem Kohli, a criminal lawyer, encouraged his son's love for the sport. Kohli's mother, Saroj Kohli, played a pivotal role in shaping his values and instilling a strong work ethic.</p>

    <p class="about">
        Kohli's family is of Punjabi Hindu descent. He has an older brother, Vikash, and an elder sister, Bhavna. Kohli's mother, a housewife, instilled in him the importance of education and family values. She emphasized the importance of maintaining a balance between cricket and academics, which Kohli adhered to throughout his school years.
        </p>
        <h2 class="sub-head">Education and Cricketing Journey</h2>
       <p class="about">Kohli's passion for cricket led him to the prestigious Vishal Bharti Public School in Delhi. His talent was evident from an early age, and he soon began representing his school and district in various tournaments.</p>

       <p class="about">In 2006, Kohli's father passed away due to a brain stroke, a devastating loss that profoundly impacted the young cricketer. However, Kohli channeled his grief into his cricketing endeavors, determined to honor his father's memory by achieving his sporting dreams.</p>

        <p class="about">Kohli's rise to prominence in the cricketing world was meteoric. In 2008, he made his international debut for India at the age of 19, marking the beginning of an era of dominance.</p>
    <h2 class="sub-head">Philanthropy and Social Impact</h2>
    <img src="/images/foundation.jpg" alt="kohli's foundation" height="300px" width="700px">
    <p class="about">Beyond his cricketing achievements, Kohli has made significant contributions to philanthropic endeavors. In 2013, he established the Virat Kohli Foundation, an organization dedicated to providing education and support to underprivileged children. The foundation has played a vital role in uplifting the lives of countless individuals, aligning with Kohli's passion for giving back to society.</p>
    <p class="about">Kohli's social impact extends beyond his foundation. He has been a vocal advocate for gender equality and has actively supported initiatives promoting women's empowerment. His influence has helped to raise awareness of important social issues, making him a role model for many.</p>
    <h2 class="sub-head">Love Life and Family</h2>
    <img src="/images/virushka.jpg" alt="kohli's foundation" height="300px" width="700px">
    <p class="about">In 2013, Kohli began dating Bollywood actress Anushka Sharma, the couple quickly becoming one of India's most celebrated celebrity pairings. Their relationship was marked by mutual respect, support, and a shared passion for their respective careers.</p>
    <p class="about">After a whirlwind romance, Kohli and Sharma tied the knot on December 11, 2017, in a private ceremony in Florence, Italy. Their wedding was a grand affair, capturing the attention of the nation and cementing their position as India's power couple.</p>
    <p class="about">In January 2021, the couple welcomed their first child, a daughter named Vamika. Kohli has spoken openly about his desire to be a hands-on father, balancing his cricketing commitments with his family life.</p>

</body>
</html>
@endsection
