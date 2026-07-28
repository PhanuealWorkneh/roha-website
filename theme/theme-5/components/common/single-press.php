/* ============================================================
   SINGLE PRESS RELEASE STYLES
   ============================================================ */

/* ---- Press Header ---- */
.press-header {
    padding: 56px 0 0;
    background: #fff;
}

.press-header-inner {
    max-width: 760px;
    margin: 0 auto;
    padding: 0 32px;
}

.press-back-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #566B75;
    text-decoration: none;
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 12.5px;
    margin-bottom: 26px;
    transition: color 0.25s ease;
}

.press-back-link:hover {
    color: #007E76;
}

.press-meta {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
}

.press-tag {
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 10.5px;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    color: #501195;
    background: rgba(80, 17, 149, 0.08);
    border-radius: 20px;
    padding: 4px 12px;
}

.press-date {
    font-size: 12.5px;
    color: #566B75;
}

.press-title {
    margin: 0 0 22px;
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 600;
    font-size: clamp(26px, 3.6vw, 38px);
    line-height: 1.25;
    color: #003854;
}

.press-actions {
    display: flex;
    gap: 12px;
    margin-bottom: 36px;
}

.press-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border-radius: 2px;
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 700;
    font-size: 12.5px;
    letter-spacing: 0.03em;
    padding: 12px 20px;
    text-decoration: none;
    border: 1px solid transparent;
    cursor: pointer;
    transition: all 0.25s ease;
}

.press-btn-primary {
    background: #003854;
    color: #fff;
    border-color: #003854;
}

.press-btn-primary:hover {
    background: #002A40;
    border-color: #002A40;
}

.press-btn-secondary {
    background: #fff;
    color: #003854;
    border-color: #003854;
}

.press-btn-secondary:hover {
    background: #F7FAF9;
}

/* ---- Press Body ---- */
.press-body {
    padding: 0 0 80px;
    background: #fff;
}

.press-body-inner {
    max-width: 700px;
    margin: 0 auto;
    padding: 0 32px;
}

.press-dateline {
    border-top: 2px solid #003854;
    border-bottom: 1px solid rgba(0, 56, 84, 0.15);
    padding: 20px 0;
    margin-bottom: 32px;
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 13px;
    letter-spacing: 0.03em;
    color: #566B75;
}

.press-paragraph {
    margin: 0 0 20px;
    line-height: 1.8;
    color: #3A4B48;
    font-size: 16px;
}

/* ---- About Section ---- */
.press-about {
    background: #F7FAF9;
    border: 1px solid rgba(0, 56, 84, 0.1);
    border-radius: 4px;
    padding: 26px 28px;
    margin-top: 36px;
}

.press-about-label {
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 11px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    font-weight: 700;
    color: #003854;
    margin-bottom: 10px;
}

.press-about p {
    margin: 0;
    font-size: 14px;
    line-height: 1.7;
    color: #566B75;
}

/* ---- Media Contact ---- */
.press-media-contact {
    margin-top: 28px;
}

.press-media-contact-label {
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 11px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    font-weight: 700;
    color: #003854;
    margin-bottom: 8px;
}

.press-media-contact-email {
    color: #007E76;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.25s ease;
}

.press-media-contact-email:hover {
    text-decoration: underline;
    color: #005B66;
}

/* ---- More Releases ---- */
.press-more {
    padding: 70px 0 100px;
    background: #F7FAF9;
}

.press-more-inner {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 32px;
}

.press-more-label {
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 12px;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    font-weight: 700;
    color: #003854;
    margin-bottom: 28px;
}

.press-more-list {
    display: flex;
    flex-direction: column;
}

.press-more-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 18px 4px;
    border-bottom: 1px solid rgba(0, 56, 84, 0.12);
    text-decoration: none;
    color: inherit;
    transition: padding-left 0.25s ease;
}

.press-more-item:hover {
    padding-left: 8px;
}

.press-more-title {
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 600;
    font-size: 14px;
    color: #003854;
}

.press-more-date {
    font-size: 12px;
    color: #566B75;
    white-space: nowrap;
}

/* ---- Responsive ---- */
@media (max-width: 640px) {
    .press-more-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 6px;
    }
    
    .press-actions {
        flex-direction: column;
    }
    
    .press-btn {
        justify-content: center;
    }
    
    .press-header {
        padding: 32px 0 0;
    }
    
    .press-title {
        font-size: clamp(22px, 5vw, 28px);
    }
    
    .press-paragraph {
        font-size: 15px;
    }
}

@media (max-width: 860px) {
    .press-body {
        padding: 0 0 56px;
    }
    
    .press-more {
        padding: 48px 0 60px;
    }
}