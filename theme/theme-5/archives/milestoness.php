<style> /* ===================================
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

    /* cursor:grab; */

    scrollbar-width:none;
    -ms-overflow-style:none;

    background: var(--cream);
    margin: 0px 50px 0px 0px;
}

.milestone-track::-webkit-scrollbar{
    display:none;
}

/* .milestone-track.dragging{
    cursor:grabbing;
} */

/* TIMELINE LINE */

.milestone-track::before{
    content:'';
    position:absolute;

    left:0;
    right:0;

    top:115px;

    height:2px;

    background:#dcd6cb;

    z-index:1;
}

/* CARD */

.milestone-card{
    position:relative;

    min-width:350px;
    max-width:300px;

    background:#fff;

    border:1px solid #e7e1d7;

    scroll-snap-align:start;

    transition:.35s ease;

    z-index:2;
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

    z-index:4;
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
    font-size:15px;
    line-height:1.75;

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
.milestone-card p {
    font-size:14px;
    line-height:1.6;
}

/* RESPONSIVE */

@media(max-width:768px){

    .milestones-horizontal{
        padding:70px 0;
    }

    .milestone-track{
        gap:24px;
    }

    .milestone-card{
        min-width:270px;
        max-width:270px;
    }

    .milestone-thumb{
        height:140px;
    }
}
</style>
<!-- ========== MILESTONES HORIZONTAL ========== -->
<section class="milestones-horizontal" id="milestones">

    <div class="container-fluid px-lg-5">

        <div class="milestone-intro fade-up">

            <div class="section-eyebrow">
                Progress
            </div>

            <h2>
                A story being
                <br>
                written in <em>real time</em>
            </h2>

            <p class="lead">
                What began as a bold vision is steadily taking shape in the heart of Addis Ababa. Explore the milestones that have defined the journey so far, from certifications and international recognition to the construction of Ethiopia's first IFC-accredited green hospital.
            </p>

        </div>

        <div class="milestone-track">

            <article class="milestone-card" data-step="01">

                <div class="milestone-thumb">
                    <img src="assets/images/milestones/ifc-edge.png" alt="">
                </div>

                <div class="milestone-content">
                    <span class="milestone-date">Nov 2024</span>
                    <span class="milestone-tag">Press Release</span>

                    <h3>Ethiopia's First IFC-Accredited Green Hospital</h3>

                    <p>
                        Roha received the IFC EDGE green building certification, placing Ethiopia on the global map of sustainable healthcare.
                    </p>
                </div>

            </article>

            <article class="milestone-card" data-step="02">

                <div class="milestone-thumb">
                    <img src="assets/images/milestones/uk-trade.png" alt="">
                </div>

                <div class="milestone-content">
                    <span class="milestone-date">Sep 2024</span>
                    <span class="milestone-tag">Diplomatic Visit</span>

                    <h3>UK Trade Commissioner Tours the Site</h3>

                    <p>
                        John Humphrey witnessed the innovative construction techniques and sustainable systems transforming the Bole district.
                    </p>
                </div>

            </article>

            <article class="milestone-card" data-step="03">

                <div class="milestone-thumb">
                    <img src="assets/images/milestones/environmental.png" alt="">
                </div>

                <div class="milestone-content">
                    <span class="milestone-date">Sep 2024</span>
                    <span class="milestone-tag">Certification</span>

                    <h3>Environmental Clearance Certificate</h3>

                    <p>
                        The Ethiopian Environmental Protection Authority granted clearance, marking full regulatory compliance.
                    </p>
                </div>

            </article>

            <article class="milestone-card current" data-step="04">

                <div class="milestone-thumb">
                    <img src="assets/images/milestones/construction.png" alt="">
                </div>

                <div class="milestone-content">
                    <span class="milestone-date">Ongoing</span>
                    <span class="milestone-tag">Construction</span>

                    <h3>Hospital Building Underway</h3>

                    <p>
                        Active construction continues in Addis Ababa as the campus rises into a new healthcare landmark.
                    </p>
                </div>

            </article>

        </div>

    </div>

</section>