

<!-- ========== CHAPTER BREAK 4 ========== -->
<div class="chapter-break">
  <div class="chapter-break-number">04</div>
  <div class="chapter-break-text">
    <div class="chapter-break-label">The Journey</div>
    <div class="chapter-break-title">A story being written<br>in <em>real time</em></div>
  </div>
</div>

<style>
/* ===================================
   MILESTONES
=================================== */

.milestones-horizontal{
    background:#faf8f4;
    padding:100px 0;
    overflow:hidden;
}

.milestone-intro{
    max-width:850px;
    margin-bottom:60px;
}

.milestone-intro h2{
    margin-bottom:20px;
}

.milestone-intro .lead{
    max-width:fit-content;
    font-size:18px;
    line-height:1.6;
}

/* TRACK */

.milestone-track{
    position:relative;
    display:flex;
    gap:40px;

    overflow-x:auto;
    overflow-y:hidden;

    scroll-behavior:smooth;
    scroll-snap-type:x mandatory;

    padding:50px 0 30px;

    scrollbar-width:none;
    -ms-overflow-style:none;

    /* background:var(--cream); */
    /* margin:0 50px 0 0; */
}

.milestone-track::-webkit-scrollbar{
    display:none;
}

/* BASE TIMELINE LINE */

.milestone-track::before{
    content:'';
    position:absolute;
    left:0;
    right:0;
    top:115px;
    height:5px;
    background:#dcd6cb;
    z-index:1;
}

/* ANIMATED TIMELINE LINE */

.milestone-progress-line{
    position:absolute;
    top:115px;
    left:0;
    height:5px;
    width:0;
    background:linear-gradient(90deg, #0f7b51, #c9a84c);
    z-index:2;
    transition:width 2.8s ease-in-out;
}

.milestone-track.animate-line .milestone-progress-line{
    width:100%;
}

/* CARD */

.milestone-card{
    position:relative;

    min-width:220px;
    max-width:350px;

    background:#fff;
    border:1px solid #e7e1d7;

    scroll-snap-align:start;

    transition:.35s ease;

    z-index:3;
}

.milestone-card:hover{
    transform:translateY(-8px);
}

/* TIMELINE DOT */

.milestone-card::before{
    content:'';
    position:absolute;

    top:107px;
    left:24px;

    width:16px;
    height:16px;

    border-radius:50%;
    background:#fff;
    border:4px solid #0f7b51;

    z-index:5;

    transition:box-shadow .4s ease, transform .4s ease;
}

/* DOT PULSE ON SCROLL-IN */

.milestone-track.animate-line .milestone-card::before{
    animation:milestoneDotPulse .8s ease forwards;
}

.milestone-track.animate-line .milestone-card:nth-of-type(1)::before{
    animation-delay:.2s;
}

.milestone-track.animate-line .milestone-card:nth-of-type(2)::before{
    animation-delay:.9s;
}

.milestone-track.animate-line .milestone-card:nth-of-type(3)::before{
    animation-delay:1.6s;
}

.milestone-track.animate-line .milestone-card:nth-of-type(4)::before{
    animation-delay:2.3s;
}

@keyframes milestoneDotPulse{
    0%{
        box-shadow:0 0 0 0 rgba(15,123,81,0);
        transform:scale(1);
    }

    50%{
        box-shadow:0 0 0 10px rgba(15,123,81,.15);
        transform:scale(1.2);
    }

    100%{
        box-shadow:0 0 0 0 rgba(15,123,81,0);
        transform:scale(1);
    }
}

/* STEP NUMBER */

.milestone-card::after{
    content:attr(data-step);

    position:absolute;
    top:-18px;
    left:22px;

    font-family:'Poppins',sans-serif;
    font-size:12px;
    font-weight:700;
    letter-spacing:2px;

    color:#0f7b51;
}

/* IMAGE */

.milestone-thumb{
    height:150px;
    overflow:hidden;
}

.milestone-thumb img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.6s ease;
}

.milestone-card:hover img{
    transform:scale(1.08);
}

/* CONTENT */

.milestone-content{
    padding:22px;
}

.milestone-date{
    display:block;

    margin-bottom:6px;

    font-size:11px;
    font-weight:700;
    letter-spacing:2px;

    color:#888;
}

.milestone-tag{
    display:block;

    margin-bottom:5px;

    font-size:11px;
    font-weight:700;
    letter-spacing:2px;

    color:#0f7b51;

    text-transform:uppercase;
}

.milestone-card h3{
    font-size:15px;
    line-height:1.35;
    margin-bottom:10px;
    margin-top:5px;
}

.milestone-card p{
    font-size:14px;
    line-height:1.6;
    color:#555;
}

/* CURRENT CARD */

.milestone-card.current{
    background:#0a3d2b;
}

.milestone-card.current::before{
    background:#c9a84c;
    border-color:#c9a84c;
}

.milestone-card.current::after{
    color:#c9a84c;
}

.milestone-card.current h3,
.milestone-card.current p,
.milestone-card.current .milestone-tag{
    color:white;
}

.milestone-card.current .milestone-date{
    color:#c9a84c;
}

/* RESPONSIVE */

@media(max-width:768px){

    .milestones-horizontal{
        padding:70px 0;
    }

    .milestone-intro{
        margin-bottom:40px;
    }

    .milestone-intro .lead{
        font-size:16px;
    }

    .milestone-track{
        gap:24px;
        margin:0;
        padding:45px 0 25px;
    }

    .milestone-track::before,
    .milestone-progress-line{
        top:108px;
    }

    .milestone-card{
        min-width:270px;
        max-width:270px;
    }

    .milestone-card::before{
        top:100px;
    }

    .milestone-thumb{
        height:140px;
    }
}
</style>
<!-- ===================================
     MILESTONES
=================================== -->
<section class="milestones-horizontal" id="milestones">

    <div class="container-fluid px-lg-5">

        <!-- Intro -->
        <div class="milestone-intro fade-up">

            <!-- <div class="section-eyebrow">
                Progress
            </div> -->

            <h2>
                Watch how the facility has <em style="color: var(--roha-premium-accent);">advanced </em>
            </h2>

            <p class="lead">
                What began as a bold vision is steadily taking shape in the heart of Addis Ababa. Explore the milestones that have defined the journey so far, from groundbreaking to international recognition of Ethiopia's first EDGE-accredited hospital.  
            </p>

        </div>

      <!-- Timeline -->
<div class="milestone-track">

    <!-- Animated Progress Line -->
    <div class="milestone-progress-line"></div>

    <!-- 01 -->
    <article class="milestone-card fade-up" data-step="01">

        <div class="milestone-thumb">
            <img src="assets/images/milestones/ifc-edge.png" alt="Milestone 01">
        </div>

        <div class="milestone-content">

            <!--
            <span class="milestone-date">Nov 2024</span>
            <p>Roha received the IFC EDGE green building certification...</p>
            -->

            <h3>
                Groundbreaking ceremony
            </h3>

        </div>

    </article>

    <!-- 02 -->
    <article class="milestone-card fade-up" data-step="02">

        <div class="milestone-thumb">
            <img src="assets/images/milestones/uk-trade.png" alt="Milestone 02">
        </div>

        <div class="milestone-content">

            <!--
            <span class="milestone-date">Sep 2024</span>
            <p>John Humphrey witnessed first-hand the innovative construction...</p>
            -->

            <h3>
                Diplomatic visit
            </h3>

        </div>

    </article>

    <!-- 03 -->
    <article class="milestone-card fade-up" data-step="03">

        <div class="milestone-thumb">
            <img src="assets/images/milestones/environmental.png" alt="Milestone 03">
        </div>

        <div class="milestone-content">

            <!--
            <span class="milestone-date">Sep 2024</span>
            <p>The Ethiopian Environmental Protection Authority granted clearance...</p>
            -->

            <h3>
                EDGE-accreditation
            </h3>

        </div>

    </article>

    <!-- 04 -->
    <article class="milestone-card current fade-up" data-step="04">

        <div class="milestone-thumb">
            <img src="assets/images/milestones/construction.png" alt="Milestone 04">
        </div>

        <div class="milestone-content">

            <!--
            <span class="milestone-date">Ongoing</span>
            <p>Active construction continues in the Bole district of Addis Ababa...</p>
            -->

            <h3>
                Completion of the Super Structure
            </h3>

        </div>

    </article>

</div>

    </div>

</section>