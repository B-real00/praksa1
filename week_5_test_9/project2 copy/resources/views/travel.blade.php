@extends('layouts.master')
@section('title', 'Travel')

@section('scripts')
<link rel="stylesheet" href="style/city-style.css">

@endsection

@section('header')

<div class="header">
    <h1>Travel</h1>
</div>

@endsection

@section('content')

<div class="table col-12 col-s-12 ">
<div class="name">
    <h1>Palo Alto</h1>
    <h4>California</h4>
    <p><a href="https://www.cityofpaloalto.org">City of Palo Alto</a></p>
</div>
<div>
    <table>
            <tr>
                <th>Attractions in Palo Alto</th>
            </tr>
            <tbody>
                <tr>
                    <td><h3>Stanford University</h3>
                        <p>
                            Located in the heart of Northern California’s dynamic "Silicon Valley,” home to Yahoo!, Google, 
                            Hewlett-Packard, and many other cutting-edge companies.
                        </p>
                        <p>
                            Is one of the world's leading teaching and research institutions, is dedicated to finding solutions 
                            to big challenges and to preparing students for makeing meaningful contributions to society. 
                        </p>
                    </td>
                    <td>
                        <a target="_blank" href="photo/Stanford_University.jpg">
                            <img src="photo/Stanford_University.jpg" alt="Stanford University" style="width: 250px">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Hanna House</h3>
                        <p>
                            The Hanna House is beautiful historic home. It was designed by Frank Lloyd Wright in 1936 for Stanford 
                            Professor Paul Hanna and his wife, Jean, specialists in childhood education. Wright had become interested 
                            in designing elegant and affordable homes for the American middle class to create a more harmonious, 
                            enlightened society.
                        </p>
                        <p>
                            The long-term collaboration between the Hannas and Wright resulted in an unprecedented design: a house based 
                            on hexagonal geometry, with no right angles in the floor plan. This radical experimentation allowed Wright to 
                            explore open spatial planning.
                        </p>
                    </td>
                    <td>
                        <a target="_blank" href="photo/Hanna House.jpg">
                            <img src="photo/Hanna House.jpg" alt="Hanna House" style="width: 250px">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Stanford Mausoleum</h3>
                        <p>
                            The Stanford Mausoleum, located in the Northwest of the Stanford University campus in the Stanford University Arboretum, 
                            holds the remains of the university's namesake Leland Stanford, Jr. and his parents Leland and Jane Stanford.
                        </p>
                        <p>
                            Originally planned as the site for Leland and Jane Stanford’s grand mansion, the family changed their plans following 
                            the death of their young son, Leland Junior. Instead, they built a university that they named after him, and built a 
                            tomb near their recently completed cactus garden.
                        </p>
                    </td>
                    <td>
                        <a target="_blank" href="photo/mausoleum.jpg">
                            <img src="photo/mausoleum.jpg" alt="Stanford Mausoleum" style="width: 250px">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Arizona Garden</h3>
                        <p>
                            The Arizona Garden is a historical garden, located on the south side of the mausoleum off of Quarry Road between Campus 
                            Drive and Arboretum Road. The garden, also known as the Cactus Garden, was designed for Jane and Leland Stanford by 
                            landscape architect Rudolf Ulrich between 1881 and 1883.
                        </p>
                        <p>
                            The garden houses over 500 species of succulents and cacti from all over the globe and is divided according to region.
                            The neat, manicured style was considered old-fashioned in comparison to the more moden wild, naturalistic garden approach 
                            gaining popularity in the 1880s. 
                        </p>
                    </td>
                    <td>
                        <a target="_blank" href="photo/arizona garden.jpg">
                            <img src="photo/arizona garden.jpg" alt="Arizona Garden" style="width: 250px">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Birthplace of Silicon Valley</h3>
                        <p>
                            A world-famous garage - epicenter of a technology revolution. This is the Palo Alto garage where two young Stanford 
                            engineering grads named Bill Hewlett and David Packard started building what would one day become the world's largest 
                            PC manufacturer. In 2000, HP turned it into a museum.
                        </p>
                        <p>
                            The site is now designated as a California Historic Landmark and is listed on the National Registry of Historic Places.
                            The Birthplace of Silicon Valley is a private museum, not open to the public. But you can see the garage and the plaque 
                            from out front.
                        </p>
                    </td>
                    <td>
                        <a target="_blank" href="photo/silicon_valley_birth.jpg">
                            <img src="photo/silicon_valley_birth.jpg" alt="Birthplace of Silicon Valley" style="width: 250px">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Elizabeth F. Gamble Garden</h3>
                        <p>
                            The Elizabeth F. Gamble Garden is a precious and uncommon resource for everyone. Located in Old Palo Alto, their historic 
                            property has a rich legacy, a commitment to education, and year-round beauty.
                        </p>
                        <p>
                            The Gamble Estate is one of the last remaining Palo Alto properties to combine extensive gardens with a house authentic 
                            to the early 1900’s.  This three story, 5,240 sq. ft dwelling, with its 1,075 sq. ft. carriage house, was called a “villa” 
                            when built in 1902. Their historic two-and-a-half acre property includes a rose garden, cutting garden, formal herb garden, 
                            demonstration bed, wisteria garden, and an allée.
                        </p>
                    </td>
                    <td>
                        <a target="_blank" href="photo/Gambel Garden.jpg">
                            <img src="photo/Gambel Garden.jpg" alt="Elizabeth F. Gamble Garden" style="width: 250px">
                        </a>
                    </td>
                </tr>
                <tr>
                <td>
                    <h3>Stanford Dish Walk</h3>
                    <p>
                        One of the most popular walks and runs on the entire Peninsula is known as The Dish, named after the large old radiotelescope 
                        used for research in the Stanford foothills and visible from throughout the area.
                    </p>
                    <p>
                        The paved trail climbs the hills and offers spectacular views of the Peninsula, the campus and the coastal mountains. On a clear 
                        day visitors can see San Francisco, Oakland, San Jose and the East Bay. The main loop trail is 3.5 miles and takes about an hour 
                        and fifteen minutes to walk.
                    </p>
                </td>
                <td>
                    <a target="_blank" href="photo/StanfordDishWalk.jpg">
                        <img src="photo/StanfordDishWalk.jpg" alt="Stanford Dish Walk" style="width: 250px">
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<div class="bottom col-12 col-s-12">
<div class="quote">
    <cite>Have the courage to follow your heart and intuition. They somehow know what you truly want to become. -Steve Jobs</cite>
</div>
</div>

@endsection