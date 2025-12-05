 @include('inc/header')

<section style="padding: 50px 0; text-align: center; font-family: Arial, sans-serif;">
  <h2 style="color: #1D3F60; font-weight: bold; margin-bottom: 10px; ">SHOW YOUR SUPER SKILLS</h2>
  <p style="color: #555; font-style: italic; margin-bottom: 40px;">Register for an Official World Record Attempt</p>

  <div  >
     <img src="{{ asset('assets/record.jpg') }}" class="img " width="100%" alt="Luco World Records logo">

  </div>
</section>

<style>


</style>











<style>
.cards-container {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
    justify-content: center;
    padding: 2rem 0;
}

.card {
    background: #fff;
    width: 250px;
    border-radius: 15px;
    overflow: hidden;
    text-align: center;
    transition: transform 0.5s ease, box-shadow 0.5s ease;
    position: relative;
    cursor: pointer;
    border: 2px solid #1D3F60; /* Perfect match with your color */
}

.card:hover {
    transform: translateY(-15px) scale(1.05);
    box-shadow: 0 25px 40px rgba(29, 63, 96, 0.3); /* Soft shadow with your color */
}

.card::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: linear-gradient(45deg, rgba(29,63,96,0.2), rgba(29,63,96,0.1));
    opacity: 0;
    transition: opacity 0.5s ease;
    border-radius: 15px;
}

.card:hover::before {
    opacity: 1;
}

.card-icon {
    background: #1D3F60; /* Perfect match */
    color: #fff;
    width: 70px;
    height: 70px;
    margin: 20px auto 10px auto;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 32px;
    border-radius: 50%;
    transition: transform 0.5s ease, background 0.5s ease;
}

.card:hover .card-icon {
    transform: rotate(20deg) scale(1.2);
    background: #14314d; /* Slightly darker on hover for depth */
}

.card-title {
    background: #1D3F60; /* Perfect match */
    color: #fff;
    padding: 12px 0;
    font-weight: bold;
    font-size: 18px;
    text-transform: uppercase;
}

.card-description {
    padding: 15px;
    font-size: 14px;
    color: #555;
    line-height: 1.5;
}
</style>

<section>
<div class="cards-container">
    <div class="card">
        <div class="card-icon">🏅</div>
        <div class="card-title">INDIVIDUAL RECORDS</div>
        <div class="card-description">
            Do you have a Unique Skill, an Exceptional Talent, or a Remarkable Accomplishment that deserves recognition? Apply and become a World Record Holder.
        </div>
    </div>

    <div class="card">
        <div class="card-icon">👥</div>
        <div class="card-title">MASS RECORDS</div>
        <div class="card-description">
            Make or Break the World Record with your team unity and showcase the power of extraordinary abilities. Apply and become a World Record Holder.
        </div>
    </div>

    <div class="card">
        <div class="card-icon">🏆</div>
        <div class="card-title">RECOGNITION</div>
        <div class="card-description">
            Recognition based on your Personality, Achievements, & Working Empowerment and etc...
        </div>
    </div>
</div>
</section>



@include('inc/footer')
