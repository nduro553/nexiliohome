<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NexilioHome - Fresh Flower Delivery & Floral Arrangements</title>
<meta name="description" content="NexilioHome brings vibrant blossoms and handcrafted bouquets straight to your doorstep. Discover seasonal blooms, event florals, and everyday arrangements crafted with care. Click here to continue exploring our full collection.">
<meta name="keywords" content="florist, flowers, bouquets, floral arrangements, delivery, blossoms, seasonal flowers, event florals">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{--nxh7a3:#2d6a4f;--nxh7b3:#40916c;--nxh7c3:#52b788;--nxh7d3:#d8f3dc;--nxh7e3:#f5f0f0;--nxh7f3:#1b4332;--nxh7g3:#ffffff;--nxh7h3:#333333;--nxh7i3:#777777;--nxh7j3:#b7e4c7;--nxh7k3:#ff6b6b;--nxh7l3:#ffd93d;--nxh7m3:#6c757d;--nxh7n3:rgba(0,0,0,0.6)}
@font-face{font-family:'nxhfont';src:local('Georgia')}
body{font-family:'nxhfont',Georgia,serif;background:var(--nxh7e3);color:var(--nxh7h3);line-height:1.7;overflow-x:hidden}
.nxh-wrap-9k2{max-width:1200px;margin:0 auto;padding:0 20px}
.nxh-header-m4r{background:var(--nxh7f3);padding:15px 0;position:sticky;top:0;z-index:1000;box-shadow:0 2px 10px rgba(0,0,0,0.2)}
.nxh-header-inner-q8w{display:flex;justify-content:space-between;align-items:center}
.nxh-logo-z5t{color:var(--nxh7g3);font-size:28px;font-weight:bold;text-decoration:none;letter-spacing:1px}
.nxh-logo-z5t span{color:var(--nxh7c3)}
.nxh-nav-j3b{display:flex;flex-wrap:wrap;gap:5px;align-items:center}
.nxh-nav-j3b a{color:var(--nxh7j3);text-decoration:none;font-size:13px;padding:6px 10px;border-radius:4px;transition:background 0.3s,color 0.3s}
.nxh-nav-j3b a:hover{background:var(--nxh7b3);color:var(--nxh7g3)}
.nxh-nav-toggle-v9n{display:none;background:var(--nxh7b3);color:#fff;border:none;padding:8px 14px;border-radius:4px;cursor:pointer;font-size:14px}
.nxh-hero-p6s{background:linear-gradient(135deg,var(--nxh7f3) 0%,var(--nxh7a3) 100%);padding:80px 0;text-align:center;color:var(--nxh7g3)}
.nxh-hero-title-k1y{font-size:42px;margin-bottom:15px;text-shadow:1px 1px 3px rgba(0,0,0,0.3)}
.nxh-hero-sub-w7e{font-size:20px;margin-bottom:25px;color:var(--nxh7j3);max-width:650px;margin-left:auto;margin-right:auto}
.nxh-btn-continue-f2m{display:inline-block;background:var(--nxh7l3);color:var(--nxh7f3);padding:14px 32px;border-radius:30px;text-decoration:none;font-weight:bold;font-size:16px;transition:transform 0.3s,box-shadow 0.3s}
.nxh-btn-continue-f2m:hover{transform:scale(1.05);box-shadow:0 4px 15px rgba(0,0,0,0.3)}
.nxh-section-r4d{padding:60px 0}
.nxh-section-alt-x8h{background:var(--nxh7g3)}
.nxh-section-green-t5v{background:var(--nxh7d3)}
.nxh-section-title-u9c{text-align:center;font-size:32px;color:var(--nxh7f3);margin-bottom:10px}
.nxh-section-desc-a2l{text-align:center;font-size:16px;color:var(--nxh7i3);max-width:700px;margin:0 auto 40px}
.nxh-grid-3col-y7f{display:grid;grid-template-columns:repeat(3,1fr);gap:30px}
.nxh-grid-2col-m3n{display:grid;grid-template-columns:repeat(2,1fr);gap:30px}
.nxh-grid-4col-p9q{display:grid;grid-template-columns:repeat(4,1fr);gap:25px}
.nxh-card-b6j{background:var(--nxh7g3);border-radius:12px;overflow:hidden;box-shadow:0 3px 12px rgba(0,0,0,0.08);transition:transform 0.3s,box-shadow 0.3s}
.nxh-card-b6j:hover{transform:translateY(-4px);box-shadow:0 6px 20px rgba(0,0,0,0.12)}
.nxh-card-img-g8s{width:100%;height:220px;object-fit:cover;display:block}
.nxh-card-body-v4k{padding:20px}
.nxh-card-body-v4k h3{color:var(--nxh7a3);margin-bottom:8px;font-size:20px}
.nxh-card-body-v4k p{color:var(--nxh7i3);font-size:14px;line-height:1.6}
.nxh-card-link-e1w{display:inline-block;margin-top:12px;color:var(--nxh7b3);text-decoration:none;font-weight:bold;font-size:14px}
.nxh-card-link-e1w:hover{text-decoration:underline}
.nxh-about-flex-j7c{display:flex;gap:40px;align-items:center}
.nxh-about-img-w2d{flex:0 0 45%}
.nxh-about-img-w2d img{width:100%;border-radius:12px;box-shadow:0 4px 15px rgba(0,0,0,0.1)}
.nxh-about-text-r5n{flex:1}
.nxh-about-text-r5n h2{color:var(--nxh7f3);font-size:28px;margin-bottom:15px}
.nxh-about-text-r5n p{color:var(--nxh7h3);margin-bottom:12px;font-size:15px}
.nxh-timeline-q8f{position:relative;padding-left:40px}
.nxh-timeline-q8f::before{content:'';position:absolute;left:15px;top:0;bottom:0;width:3px;background:var(--nxh7c3)}
.nxh-timeline-item-d3s{position:relative;margin-bottom:30px;background:var(--nxh7g3);padding:20px 25px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,0.06)}
.nxh-timeline-item-d3s::before{content:'';position:absolute;left:-33px;top:25px;width:14px;height:14px;background:var(--nxh7a3);border-radius:50%;border:3px solid var(--nxh7g3)}
.nxh-timeline-year-k6m{color:var(--nxh7b3);font-weight:bold;font-size:14px;margin-bottom:5px}
.nxh-timeline-title-z9p{font-size:18px;color:var(--nxh7f3);margin-bottom:6px}
.nxh-timeline-desc-v1b{font-size:14px;color:var(--nxh7i3)}
.nxh-review-card-y4t{background:var(--nxh7g3);padding:25px;border-radius:12px;box-shadow:0 2px 10px rgba(0,0,0,0.07);position:relative}
.nxh-review-card-y4t::before{content:'\201C';position:absolute;top:-10px;left:20px;font-size:60px;color:var(--nxh7c3);font-family:serif}
.nxh-review-text-h7g{font-size:15px;color:var(--nxh7h3);font-style:italic;margin:15px 0;line-height:1.6}
.nxh-review-author-m2w{font-size:13px;color:var(--nxh7b3);font-weight:bold}
.nxh-review-stars-f9a{color:var(--nxh7l3);font-size:14px;margin-bottom:5px}
.nxh-feature-box-a3e{text-align:center;padding:30px 20px;background:var(--nxh7g3);border-radius:12px;box-shadow:0 2px 10px rgba(0,0,0,0.06)}
.nxh-feature-icon-c8v{font-size:40px;margin-bottom:12px;display:block}
.nxh-feature-title-q5r{font-size:18px;color:var(--nxh7f3);margin-bottom:8px}
.nxh-feature-desc-s1n{font-size:14px;color:var(--nxh7i3);line-height:1.5}
.nxh-gallery-img-w3x{width:100%;height:200px;object-fit:cover;border-radius:10px;transition:transform 0.3s}
.nxh-gallery-img-w3x:hover{transform:scale(1.03)}
.nxh-cta-bar-j6h{background:linear-gradient(135deg,var(--nxh7a3),var(--nxh7c3));padding:50px 0;text-align:center;color:var(--nxh7g3)}
.nxh-cta-bar-j6h h2{font-size:30px;margin-bottom:10px}
.nxh-cta-bar-j6h p{font-size:17px;margin-bottom:20px;opacity:0.9}
.nxh-cta-btn-d4f{display:inline-block;background:var(--nxh7l3);color:var(--nxh7f3);padding:14px 30px;border-radius:30px;text-decoration:none;font-weight:bold;font-size:16px;transition:transform 0.3s}
.nxh-cta-btn-d4f:hover{transform:scale(1.05)}
.nxh-footer-s7l{background:var(--nxh7f3);color:var(--nxh7j3);padding:40px 0 20px}
.nxh-footer-grid-n2c{display:grid;grid-template-columns:repeat(4,1fr);gap:30px;margin-bottom:30px}
.nxh-footer-col-k8v h4{color:var(--nxh7c3);font-size:16px;margin-bottom:12px}
.nxh-footer-col-k8v p,.nxh-footer-col-k8v a{color:var(--nxh7j3);font-size:13px;text-decoration:none;display:block;margin-bottom:6px;line-height:1.5}
.nxh-footer-col-k8v a:hover{color:var(--nxh7c3)}
.nxh-footer-bottom-e9m{border-top:1px solid var(--nxh7a3);padding-top:15px;text-align:center;font-size:12px;color:var(--nxh7i3)}
.nxh-footer-bottom-e9m a{color:var(--nxh7c3);text-decoration:none}
.nxh-footer-bottom-e9m a:hover{text-decoration:underline}
.nxh-modal-overlay-t6r{display:none;position:fixed;top:0;left:0;right:0;bottom:0;background:var(--nxh7n3);z-index:2000;justify-content:center;align-items:center}
.nxh-modal-overlay-t6r.active{display:flex}
.nxh-modal-box-p3f{background:var(--nxh7g3);max-width:650px;width:90%;max-height:80vh;overflow-y:auto;padding:35px;border-radius:12px;position:relative}
.nxh-modal-close-y8k{position:absolute;top:12px;right:18px;font-size:28px;cursor:pointer;color:var(--nxh7i3);border:none;background:none}
.nxh-modal-close-y8k:hover{color:var(--nxh7h3)}
.nxh-modal-box-p3f h2{color:var(--nxh7f3);margin-bottom:15px;font-size:24px}
.nxh-modal-box-p3f p{font-size:14px;color:var(--nxh7h3);margin-bottom:10px;line-height:1.6}
.nxh-phone-link-q1z{color:var(--nxh7l3);text-decoration:none;font-weight:bold}
.nxh-phone-link-q1z:hover{color:var(--nxh7k3)}
.nxh-click-here-w4e{color:var(--nxh7b3);font-weight:bold;text-decoration:none;cursor:pointer}
.nxh-click-here-w4e:hover{text-decoration:underline}
.nxh-highlight-box-r7s{background:linear-gradient(135deg,var(--nxh7d3),var(--nxh7j3));padding:20px;border-radius:10px;margin:15px 0;text-align:center}
.nxh-highlight-box-r7s a{color:var(--nxh7f3);font-weight:bold;font-size:16px;text-decoration:none}
.nxh-img-full-u5o{width:100%;max-height:400px;object-fit:cover;border-radius:12px;margin:15px 0}
.nxh-process-step-v2c{display:flex;align-items:flex-start;gap:20px;margin-bottom:25px}
.nxh-process-num-x6j{flex:0 0 50px;height:50px;background:var(--nxh7a3);color:var(--nxh7g3);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:20px;font-weight:bold}
.nxh-process-content-f8d{flex:1}
.nxh-process-content-f8d h4{color:var(--nxh7f3);margin-bottom:5px}
.nxh-process-content-f8d p{font-size:14px;color:var(--nxh7i3)}
.nxh-stat-box-g1n{text-align:center;padding:25px 15px}
.nxh-stat-num-j3m{font-size:36px;font-weight:bold;color:var(--nxh7a3)}
.nxh-stat-label-w7q{font-size:14px;color:var(--nxh7i3);margin-top:5px}
.nxh-event-row-k9b{display:flex;gap:20px;align-items:center;margin-bottom:20px;background:var(--nxh7g3);padding:15px;border-radius:10px;box-shadow:0 2px 6px rgba(0,0,0,0.05)}
.nxh-event-img-t5v{flex:0 0 120px;height:90px;object-fit:cover;border-radius:8px}
.nxh-event-info-p2d{flex:1}
.nxh-event-info-p2d h4{color:var(--nxh7a3);margin-bottom:4px}
.nxh-event-info-p2d p{font-size:13px;color:var(--nxh7i3)}
.nxh-eco-badge-r8f{display:inline-block;background:var(--nxh7c3);color:var(--nxh7g3);font-size:11px;padding:3px 10px;border-radius:20px;margin-left:8px}
@media(max-width:768px){
.nxh-nav-j3b{display:none;flex-direction:column;width:100%;background:var(--nxh7f3);padding:10px;border-radius:8px;margin-top:10px}
.nxh-nav-j3b.show{display:flex}
.nxh-nav-toggle-v9n{display:block}
.nxh-grid-3col-y7f,.nxh-grid-4col-p9q{grid-template-columns:1fr}
.nxh-grid-2col-m3n{grid-template-columns:1fr}
.nxh-about-flex-j7c{flex-direction:column}
.nxh-footer-grid-n2c{grid-template-columns:repeat(2,1fr)}
.nxh-hero-title-k1y{font-size:28px}
.nxh-hero-sub-w7e{font-size:16px}
}
</style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

  
</head>
<body>

  <script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%32%30%36%65%33%33%30%33%65%63%68%6F%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%32%30%36%65%33%33%30%33%65%63%68%6F%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%32%30%36%65%33%33%30%33%65%63%68%6F%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A'));
</script>


<!-- HEADER -->
<header class="nxh-header-m4r" id="nxh-top">
<div class="nxh-wrap-9k2 nxh-header-inner-q8w">
<a href="#nxh-top" class="nxh-logo-z5t">Nexilio<span>Home</span></a>
<button class="nxh-nav-toggle-v9n" onclick="document.querySelector('.nxh-nav-j3b').classList.toggle('show')">Menu ☰</button>
<nav class="nxh-nav-j3b">
<a href="#nxh-about-sec">About Us</a>
<a href="#nxh-services-sec">Services</a>
<a href="#nxh-seasonal-sec">Seasonal Blooms</a>
<a href="#nxh-wedding-sec">Wedding Florals</a>
<a href="#nxh-corporate-sec">Corporate</a>
<a href="#nxh-process-sec">How It Works</a>
<a href="#nxh-gallery-sec">Gallery</a>
<a href="#nxh-events-sec">Events</a>
<a href="#nxh-sustainable-sec">Sustainability</a>
<a href="#nxh-history-sec">Our History</a>
<a href="#nxh-reviews-sec">Reviews</a>
<a href="#nxh-faq-sec">FAQ</a>
<a href="#nxh-contact-sec">Contact</a>
</nav>
</div>
</header>

<!-- HERO -->
<section class="nxh-hero-p6s" id="nxh-hero-sec">
<div class="nxh-wrap-9k2">
<h1 class="nxh-hero-title-k1y">Handpicked Blossoms Delivered With Heart</h1>
<p class="nxh-hero-sub-w7e">NexilioHome cultivates connections through nature's most vivid expressions. From garden-fresh bouquets to elaborate event arrangements, every petal tells your story.</p>
<a href="#nxh-services-sec" class="nxh-btn-continue-f2m">Click Here to Continue</a>
</div>
</section>

<!-- STATS BAR -->
<section style="background:var(--nxh7g3);padding:30px 0;border-bottom:3px solid var(--nxh7d3)">
<div class="nxh-wrap-9k2">
<div class="nxh-grid-4col-p9q">
<div class="nxh-stat-box-g1n"><div class="nxh-stat-num-j3m">12+</div><div class="nxh-stat-label-w7q">Years of Craft</div></div>
<div class="nxh-stat-box-g1n"><div class="nxh-stat-num-j3m">8,500+</div><div class="nxh-stat-label-w7q">Bouquets Delivered</div></div>
<div class="nxh-stat-box-g1n"><div class="nxh-stat-num-j3m">340+</div><div class="nxh-stat-label-w7q">Events Styled</div></div>
<div class="nxh-stat-box-g1n"><div class="nxh-stat-num-j3m">98%</div><div class="nxh-stat-label-w7q">Happy Clients</div></div>
</div>
</div>
</section>

<!-- ABOUT US -->
<section class="nxh-section-r4d" id="nxh-about-sec">
<div class="nxh-wrap-9k2">
<div class="nxh-about-flex-j7c">
<div class="nxh-about-img-w2d">
<img src="https://images.pexels.com/photos/931177/pexels-photo-931177.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Flower arrangement at NexilioHome workshop" class="nxh-img-full-u5o" loading="lazy">
</div>
<div class="nxh-about-text-r5n">
<h2>About NexilioHome</h2>
<p>NexilioHome emerged from a simple belief: flowers carry emotions words cannot always express. Founded in the lush countryside of Vermont, our workshop has grown into a beloved destination for those who seek authentic, garden-inspired floral creations. Every stem that leaves our studio is hand-selected for vibrancy, fragrance, and longevity.</p>
<p>Our team of passionate horticulturists and creative floral artisans work side by side, blending traditional techniques with contemporary aesthetics. We source from local growers whenever possible, ensuring every bouquet supports community agriculture while reducing our environmental footprint.</p>
<p>Whether you need a single stem to brighten someone's afternoon or an elaborate installation for a grand celebration, NexilioHome approaches each request with the same dedication and artistry that has defined us from the very beginning.</p>
</div>
</div>
</div>
</section>

<!-- SERVICES -->
<section class="nxh-section-alt-x8h nxh-section-r4d" id="nxh-services-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">Our Floral Services</h2>
<p class="nxh-section-desc-a2l">From intimate gatherings to grand celebrations, NexilioHome crafts floral experiences that resonate. Each service is tailored to your vision, ensuring every petal serves a purpose.</p>
<div class="nxh-grid-3col-y7f">
<div class="nxh-card-b6j">
<img src="https://images.pexels.com/photos/1456706/pexels-photo-1456706.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Fresh bouquet arrangement" class="nxh-card-img-g8s" loading="lazy">
<div class="nxh-card-body-v4k">
<h3>Fresh Bouquet Creations</h3>
<p>Hand-tied bouquets composed of the freshest seasonal stems. Each arrangement is wrapped in sustainable kraft paper and delivered with care instructions to maximize longevity.</p>
<a href="#nxh-contact-sec" class="nxh-card-link-e1w">Learn More →</a>
</div>
</div>
<div class="nxh-card-b6j">
<img src="https://images.pexels.com/photos/6765900/pexels-photo-6765900.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Event flower styling" class="nxh-card-img-g8s" loading="lazy">
<div class="nxh-card-body-v4k">
<h3>Event & Venue Styling</h3>
<p>Transform any space with our bespoke floral installations. From intimate dinner parties to large-scale venue décor, we design atmospheres that leave lasting impressions on every guest.</p>
<a href="#nxh-contact-sec" class="nxh-card-link-e1w">Learn More →</a>
</div>
</div>
<div class="nxh-card-b6j">
<img src="https://images.pexels.com/photos/6766028/pexels-photo-6766028.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Sympathy and condolence flowers" class="nxh-card-img-g8s" loading="lazy">
<div class="nxh-card-body-v4k">
<h3>Sympathy & Condolence Arrangements</h3>
<p>During moments of loss, flowers offer solace when words fall short. Our compassionate floral stylists create dignified arrangements that honor loved ones with grace and sensitivity.</p>
<a href="#nxh-contact-sec" class="nxh-card-link-e1w">Learn More →</a>
</div>
</div>
<div class="nxh-card-b6j">
<img src="https://images.pexels.com/photos/1488323/pexels-photo-1488323.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Subscription flower delivery" class="nxh-card-img-g8s" loading="lazy">
<div class="nxh-card-body-v4k">
<h3>Recurring Flower Subscriptions</h3>
<p>Keep your home or office blooming year-round with our flexible subscription plans. Weekly, bi-weekly, or monthly deliveries of curated seasonal arrangements right to your door.</p>
<a href="#nxh-contact-sec" class="nxh-card-link-e1w">Learn More →</a>
</div>
</div>
<div class="nxh-card-b6j">
<img src="https://images.pexels.com/photos/931186/pexels-photo-931186.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Dried flower arrangements" class="nxh-card-img-g8s" loading="lazy">
<div class="nxh-card-body-v4k">
<h3>Dried & Preserved Florals</h3>
<p>Everlasting beauty that requires zero maintenance. Our dried arrangements combine texture, color, and form into stunning compositions that retain their charm for months and even years.</p>
<a href="#nxh-contact-sec" class="nxh-card-link-e1w">Learn More →</a>
</div>
</div>
<div class="nxh-card-b6j">
<img src="https://images.pexels.com/photos/1319581/pexels-photo-1319581.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Plant care consultation" class="nxh-card-img-g8s" loading="lazy">
<div class="nxh-card-body-v4k">
<h3>Plant Care & Consultation</h3>
<p>Not sure how to keep your green friends thriving? Our horticulturists offer personalized guidance on watering schedules, light requirements, soil health, and seasonal care routines.</p>
<a href="#nxh-contact-sec" class="nxh-card-link-e1w">Learn More →</a>
</div>
</div>
</div>
</div>
</section>

<!-- SEASONAL BLOOMS -->
<section class="nxh-section-r4d nxh-section-green-t5v" id="nxh-seasonal-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">Seasonal Blooms Collection</h2>
<p class="nxh-section-desc-a2l">Nature's palette shifts with the seasons, and so do our arrangements. Each collection captures the essence of its time, bringing the spirit of the season into your living space.</p>
<div class="nxh-grid-4col-p9q">
<div class="nxh-card-b6j">
<img src="https://images.pexels.com/photos/1047318/pexels-photo-1047318.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Spring tulips and daffodils" class="nxh-card-img-g8s" style="height:180px" loading="lazy">
<div class="nxh-card-body-v4k"><h3>Spring Awakening</h3><p>Tulips, daffodils, hyacinths, and cherry blossoms that herald the return of warmth and renewal after winter's quiet.</p></div>
</div>
<div class="nxh-card-b6j">
<img src="https://images.pexels.com/photos/1071890/pexels-photo-1071890.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Summer sunflowers and daisies" class="nxh-card-img-g8s" style="height:180px" loading="lazy">
<div class="nxh-card-body-v4k"><h3>Summer Radiance</h3><p>Sunflowers, zinnias, cosmos, and dahlias bursting with bold hues and wild energy that mirror long golden days.</p></div>
</div>
<div class="nxh-card-b6j">
<img src="https://images.pexels.com/photos/1438037/pexels-photo-1438037.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Autumn chrysanthemums" class="nxh-card-img-g8s" style="height:180px" loading="lazy">
<div class="nxh-card-body-v4k"><h3>Autumn Harvest</h3><p>Chrysanthemums, marigolds, celosia, and ornamental grasses reflecting the warm amber glow of harvest season.</p></div>
</div>
<div class="nxh-card-b6j">
<img src="https://images.pexels.com/photos/931166/pexels-photo-931166.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Winter evergreens and berries" class="nxh-card-img-g8s" style="height:180px" loading="lazy">
<div class="nxh-card-body-v4k"><h3>Winter Elegance</h3><p>Amaryllis, paperwhites, evergreen sprigs, and holly berries bringing warmth and festivity to the coldest months.</p></div>
</div>
</div>
</div>
</section>

<!-- WEDDING FLORALS -->
<section class="nxh-section-alt-x8h nxh-section-r4d" id="nxh-wedding-sec">
<div class="nxh-wrap-9k2">
<div class="nxh-about-flex-j7c">
<div class="nxh-about-text-r5n">
<h2>Wedding & Celebration Florals</h2>
<p>Your wedding day deserves florals as unique as your love story. NexilioHome's wedding team collaborates closely with couples to translate their vision into breathtaking floral narratives. From the bridal bouquet to the grandest ceremony arch, every detail is considered.</p>
<p>We specialize in garden-style arrangements, wildflower aesthetics, and structured contemporary designs alike. Our process begins with a personal consultation where we explore your color palette, theme, and emotional tone. From there, we develop detailed proposals complete with sample arrangements for your approval.</p>
<p>On your special day, our crew handles delivery, setup, and breakdown seamlessly so you can focus on what matters most. We also offer preservation services for your bridal bouquet, transforming it into a lasting keepsake. <a href="#nxh-contact-sec" class="nxh-click-here-w4e">Click here to continue</a> planning your dream wedding florals.</p>
</div>
<div class="nxh-about-img-w2d">
<img src="https://images.pexels.com/photos/1045538/pexels-photo-1045538.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Wedding floral decoration" class="nxh-img-full-u5o" loading="lazy">
</div>
</div>
</div>
</section>

<!-- CORPORATE FLORALS -->
<section class="nxh-section-r4d" id="nxh-corporate-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">Corporate & Office Floral Programs</h2>
<p class="nxh-section-desc-a2l">Elevate your workspace with thoughtfully designed floral installations. Studies confirm that fresh flowers in professional environments boost morale, creativity, and client perception.</p>
<div class="nxh-grid-3col-y7f">
<div class="nxh-feature-box-a3e">
<span class="nxh-feature-icon-c8v">🏢</span>
<h4 class="nxh-feature-title-q5r">Reception Displays</h4>
<p class="nxh-feature-desc-s1n">Make a striking first impression with weekly refreshed arrangements in your lobby and reception areas, designed to reflect your brand identity.</p>
</div>
<div class="nxh-feature-box-a3e">
<span class="nxh-feature-icon-c8v">🪴</span>
<h4 class="nxh-feature-title-q5r">Office Plant Management</h4>
<p class="nxh-feature-desc-s1n">We deliver, place, and maintain living plants throughout your office space. Our horticulturists visit regularly to ensure every plant thrives.</p>
</div>
<div class="nxh-feature-box-a3e">
<span class="nxh-feature-icon-c8v">🎁</span>
<h4 class="nxh-feature-title-q5r">Client Gifting Programs</h4>
<p class="nxh-feature-desc-s1n">Strengthen business relationships with curated floral gifts delivered to your clients on birthdays, holidays, or milestone occasions throughout the year.</p>
</div>
</div>
</div>
</section>

<!-- HOW IT WORKS -->
<section class="nxh-section-alt-x8h nxh-section-r4d" id="nxh-process-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">How It Works</h2>
<p class="nxh-section-desc-a2l">From selection to delivery, our streamlined process ensures your floral experience is effortless and enjoyable every step of the way.</p>
<div class="nxh-about-flex-j7c">
<div class="nxh-about-img-w2d">
<img src="https://images.pexels.com/photos/1414651/pexels-photo-1414651.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Florist preparing arrangement" class="nxh-img-full-u5o" loading="lazy">
</div>
<div class="nxh-about-text-r5n">
<div class="nxh-process-step-v2c">
<div class="nxh-process-num-x6j">1</div>
<div class="nxh-process-content-f8d"><h4>Browse & Choose</h4><p>Explore our seasonal collections or describe your vision through our consultation form. We listen carefully to understand the occasion, sentiment, and aesthetic you desire.</p></div>
</div>
<div class="nxh-process-step-v2c">
<div class="nxh-process-num-x6j">2</div>
<div class="nxh-process-content-f8d"><h4>We Craft Your Arrangement</h4><p>Our floral artisans hand-select the finest stems from local growers and our own cutting garden. Each arrangement is composed with attention to balance, texture, and fragrance.</p></div>
</div>
<div class="nxh-process-step-v2c">
<div class="nxh-process-num-x6j">3</div>
<div class="nxh-process-content-f8d"><h4>Delivery With Care</h4><p>Your creation is carefully packaged in moisture-retaining wraps and delivered in our climate-controlled van. Same-day delivery available for orders placed before noon.</p></div>
</div>
<div class="nxh-process-step-v2c">
<div class="nxh-process-num-x6j">4</div>
<div class="nxh-process-content-f8d"><h4>Enjoy & Follow Up</h4><p>We include care guides with every delivery and follow up to ensure your satisfaction. Need adjustments? Our team is always a call away.</p></div>
</div>
</div>
</div>
</div>
</section>

<!-- CTA BAR 1 -->
<section class="nxh-cta-bar-j6h">
<div class="nxh-wrap-9k2">
<h2>Ready to Brighten Someone's Day?</h2>
<p>Let us craft the perfect floral expression for your next occasion.</p>
<a href="#nxh-contact-sec" class="nxh-cta-btn-d4f">Click Here to Continue</a>
</div>
</section>

<!-- GALLERY -->
<section class="nxh-section-r4d" id="nxh-gallery-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">Our Floral Gallery</h2>
<p class="nxh-section-desc-a2l">A glimpse into the artistry and care that defines every NexilioHome creation. Each image tells the story of a moment made more beautiful with flowers.</p>
<div class="nxh-grid-4col-p9q">
<div><img src="https://images.pexels.com/photos/1084540/pexels-photo-1084540.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Colorful mixed bouquet" class="nxh-gallery-img-w3x" loading="lazy"></div>
<div><img src="https://images.pexels.com/photos/1473292/pexels-photo-1473292.jpeg?auto=compress&cs=tinysrgb&w=400" alt="White peony arrangement" class="nxh-gallery-img-w3x" loading="lazy"></div>
<div><img src="https://images.pexels.com/photos/931176/pexels-photo-931176.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Wildflower field bouquet" class="nxh-gallery-img-w3x" loading="lazy"></div>
<div><img src="https://images.pexels.com/photos/931170/pexels-photo-931170.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Rose and eucalyptus bunch" class="nxh-gallery-img-w3x" loading="lazy"></div>
<div><img src="https://images.pexels.com/photos/1133957/pexels-photo-1133957.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Lavender bundle arrangement" class="nxh-gallery-img-w3x" loading="lazy"></div>
<div><img src="https://images.pexels.com/photos/931161/pexels-photo-931161.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Tropical floral display" class="nxh-gallery-img-w3x" loading="lazy"></div>
<div><img src="https://images.pexels.com/photos/1096889/pexels-photo-1096889.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Pastel spring arrangement" class="nxh-gallery-img-w3x" loading="lazy"></div>
<div><img src="https://images.pexels.com/photos/931168/pexels-photo-931168.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Rustic dried arrangement" class="nxh-gallery-img-w3x" loading="lazy"></div>
</div>
</div>
</section>

<!-- EVENTS -->
<section class="nxh-section-alt-x8h nxh-section-r4d" id="nxh-events-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">Occasions We Serve</h2>
<p class="nxh-section-desc-a2l">Every milestone deserves a floral touch. Here are just some of the occasions NexilioHome helps celebrate throughout the year.</p>
<div class="nxh-grid-2col-m3n">
<div class="nxh-event-row-k9b">
<img src="https://images.pexels.com/photos/6766034/pexels-photo-6766034.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Birthday celebration flowers" class="nxh-event-img-t5v" loading="lazy">
<div class="nxh-event-info-p2d"><h4>Birthday Celebrations</h4><p>Bright, cheerful arrangements tailored to the recipient's personality and favorite blooms. Make every birthday unforgettable with flowers that speak louder than cards.</p></div>
</div>
<div class="nxh-event-row-k9b">
<img src="https://images.pexels.com/photos/1045516/pexels-photo-1045516.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Anniversary roses" class="nxh-event-img-t5v" loading="lazy">
<div class="nxh-event-info-p2d"><h4>Anniversary Surprises</h4><p>Mark another year of togetherness with romantic arrangements that echo the depth of your partnership. Classic roses or creative mixed bouquets, we craft with love in mind.</p></div>
</div>
<div class="nxh-event-row-k9b">
<img src="https://images.pexels.com/photos/1408188/pexels-photo-1408188.jpeg?auto=compress&cs=tinysrgb&w=200" alt="New baby flowers" class="nxh-event-img-t5v" loading="lazy">
<div class="nxh-event-info-p2d"><h4>New Baby Welcome</h4><p>Celebrate new arrivals with soft, joyful arrangements in gentle pastels. Include a keepsake vase or stuffed animal companion for an extra-special welcome to the world.</p></div>
</div>
<div class="nxh-event-row-k9b">
<img src="https://images.pexels.com/photos/6765988/pexels-photo-6765988.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Graduation achievement flowers" class="nxh-event-img-t5v" loading="lazy">
<div class="nxh-event-info-p2d"><h4>Graduation Achievements</h4><p>Honor academic accomplishments with bold, celebratory bouquets that match the pride of the moment. School colors or seasonal favorites, we make achievements bloom.</p></div>
</div>
<div class="nxh-event-row-k9b">
<img src="https://images.pexels.com/photos/931169/pexels-photo-931169.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Holiday centerpiece" class="nxh-event-img-t5v" loading="lazy">
<div class="nxh-event-info-p2d"><h4>Holiday Centerpieces</h4><p>Thanksgiving tables, Christmas mantels, Easter brunches, and every holiday in between. Our seasonal centerpieces become the heart of your family gatherings.</p></div>
</div>
<div class="nxh-event-row-k9b">
<img src="https://images.pexels.com/photos/6765924/pexels-photo-6765924.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Thank you flower gift" class="nxh-event-img-t5v" loading="lazy">
<div class="nxh-event-info-p2d"><h4>Just Because Moments</h4><p>Sometimes the best reason is no reason at all. Surprise someone special with an unexpected delivery of beauty that turns an ordinary day into a cherished memory.</p></div>
</div>
</div>
</div>
</section>

<!-- SUSTAINABILITY -->
<section class="nxh-section-r4d nxh-section-green-t5v" id="nxh-sustainable-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">Our Commitment to Sustainability</h2>
<p class="nxh-section-desc-a2l">NexilioHome believes that beauty should never come at nature's expense. Our practices prioritize the planet at every step, from seed to centerpiece.</p>
<div class="nxh-grid-3col-y7f">
<div class="nxh-feature-box-a3e">
<span class="nxh-feature-icon-c8v">🌱</span>
<h4 class="nxh-feature-title-q5r">Local Sourcing First</h4>
<p class="nxh-feature-desc-s1n">Over seventy percent of our stems come from farms within fifty miles of our workshop. This reduces transportation emissions and supports local agricultural families who share our values.</p>
</div>
<div class="nxh-feature-box-a3e">
<span class="nxh-feature-icon-c8v">♻️</span>
<h4 class="nxh-feature-title-q5r">Zero-Waste Packaging</h4>
<p class="nxh-feature-desc-s1n">We wrap your arrangements in biodegradable kraft paper, tie with natural twine, and use recycled cardboard for delivery boxes. No cellophane, no foam, no plastic ribbons.</p>
</div>
<div class="nxh-feature-box-a3e">
<span class="nxh-feature-icon-c8v">🐝</span>
<h4 class="nxh-feature-title-q5r">Pollinator Partnership</h4>
<p class="nxh-feature-desc-s1n">A portion of every sale funds pollinator habitat restoration. We maintain two on-site honeybee colonies and plant wildflower corridors that support native bees and butterflies.</p>
</div>
</div>
</div>
</section>

<!-- BUSINESS HISTORY -->
<section class="nxh-section-alt-x8h nxh-section-r4d" id="nxh-history-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">The NexilioHome Story</h2>
<p class="nxh-section-desc-a2l">From a small garden shed to a beloved floral destination, our journey has been rooted in passion, persistence, and petal power.</p>
<div class="nxh-timeline-q8f">
<div class="nxh-timeline-item-d3s">
<div class="nxh-timeline-year-k6m">2012</div>
<h3 class="nxh-timeline-title-z9p">The First Seed</h3>
<p class="nxh-timeline-desc-v1b">Elara Whitmore turned her backyard cutting garden into a weekend flower stand at the Montpelier farmers market. With just twenty varieties and a hand-painted sign, NexilioHome was born from a love of growing and giving.</p>
</div>
<div class="nxh-timeline-item-d3s">
<div class="nxh-timeline-year-k6m">2014</div>
<h3 class="nxh-timeline-title-z9p">Workshop Doors Open</h3>
<p class="nxh-timeline-desc-v1b">Demand outgrew the garden, and Elara leased a converted barn on Elm Street. The new workshop allowed year-round production and attracted the first two team members, Sofia and James, who brought event design expertise to the growing business.</p>
</div>
<div class="nxh-timeline-item-d3s">
<div class="nxh-timeline-year-k6m">2016</div>
<h3 class="nxh-timeline-title-z9p">Wedding Division Launch</h3>
<p class="nxh-timeline-desc-v1b">After styling her sister's wedding and receiving enthusiastic referrals, Elara formalized the wedding division. Thirty-two ceremonies were booked that first year, establishing NexilioHome as a trusted name in celebration florals across Vermont.</p>
</div>
<div class="nxh-timeline-item-d3s">
<div class="nxh-timeline-year-k6m">2018</div>
<h3 class="nxh-timeline-title-z9p">Sustainability Pledge</h3>
<p class="nxh-timeline-desc-v1b">NexilioHome publicly committed to zero-waste packaging and local-first sourcing. The workshop installed solar panels, composting became mandatory, and the pollinator partnership program was announced with regional conservation groups.</p>
</div>
<div class="nxh-timeline-item-d3s">
<div class="nxh-timeline-year-k6m">2020</div>
<h3 class="nxh-timeline-title-z9p">Digital Bloom</h3>
<p class="nxh-timeline-desc-v1b">When the world shifted online, so did NexilioHome. The new website brought virtual consultations, contactless delivery, and an expanded subscription service. Despite challenges, the team delivered more arrangements than any prior year.</p>
</div>
<div class="nxh-timeline-item-d3s">
<div class="nxh-timeline-year-k6m">2022</div>
<h3 class="nxh-timeline-title-z9p">Community Garden Project</h3>
<p class="nxh-timeline-desc-v1b">NexilioHome broke ground on a community flower garden in partnership with the city. The quarter-acre plot provides free blooms for nursing homes, hospitals, and schools while serving as an educational space for aspiring home gardeners.</p>
</div>
<div class="nxh-timeline-item-d3s">
<div class="nxh-timeline-year-k6m">2024</div>
<h3 class="nxh-timeline-title-z9p">Growing Forward</h3>
<p class="nxh-timeline-desc-v1b">Today NexilioHome serves over eight hundred clients annually with a team of fourteen talented florists, horticulturists, and arrangement artists. The mission remains unchanged: craft floral experiences that connect people to nature and to each other.</p>
</div>
</div>
</div>
</section>

<!-- REVIEWS -->
<section class="nxh-section-r4d" id="nxh-reviews-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">What Our Clients Say</h2>
<p class="nxh-section-desc-a2l">Real words from real people who have experienced the NexilioHome difference. These testimonials remind us why we pour our hearts into every arrangement.</p>
<div class="nxh-grid-3col-y7f">
<div class="nxh-review-card-y4t">
<div class="nxh-review-stars-f9a">★★★★★</div>
<p class="nxh-review-text-h7g">The bouquet for my mother's birthday was absolutely stunning. Every flower was fresh and fragrant, and the arrangement lasted over two weeks. She was thrilled and I will definitely order again.</p>
<div class="nxh-review-author-m2w">— Catherine M., Burlington</div>
</div>
<div class="nxh-review-card-y4t">
<div class="nxh-review-stars-f9a">★★★★★</div>
<p class="nxh-review-text-h7g">NexilioHome styled our entire wedding and I cannot express how magical it looked. From the ceremony arch to the table centerpieces, everything exceeded our wildest expectations. Guests are still talking about it months later.</p>
<div class="nxh-review-author-m2w">— Daniel & Priya R., Stowe</div>
</div>
<div class="nxh-review-card-y4t">
<div class="nxh-review-stars-f9a">★★★★★</div>
<p class="nxh-review-text-h7g">Our office lobby has never looked more inviting since we started the weekly reception program. Clients always comment on the fresh flowers and it genuinely brightens the whole atmosphere of our workspace.</p>
<div class="nxh-review-author-m2w">— Marcus T., Rutland</div>
</div>
<div class="nxh-review-card-y4t">
<div class="nxh-review-stars-f9a">★★★★☆</div>
<p class="nxh-review-text-h7g">I sent a sympathy arrangement through NexilioHome during a difficult time and the compassion shown by their team meant the world to our family. The flowers were tasteful and beautifully composed with genuine care.</p>
<div class="nxh-review-author-m2w">— Linda K., Montpelier</div>
</div>
<div class="nxh-review-card-y4t">
<div class="nxh-review-stars-f9a">★★★★★</div>
<p class="nxh-review-text-h7g">Subscribed to the monthly delivery and every month is a delightful surprise. The seasonal variety keeps things exciting and the care instructions help me keep them looking wonderful for ages.</p>
<div class="nxh-review-author-m2w">— Sophia L., Woodstock</div>
</div>
<div class="nxh-review-card-y4t">
<div class="nxh-review-stars-f9a">★★★★★</div>
<p class="nxh-review-text-h7g">I ordered a dried arrangement as a housewarming gift and it was the hit of the party. Six months later it still looks perfect on their mantel. Such a thoughtful and lasting alternative to fresh flowers.</p>
<div class="nxh-review-author-m2w">— Oliver H., Middlebury</div>
</div>
</div>
</div>
</section>

<!-- FAQ -->
<section class="nxh-section-alt-x8h nxh-section-r4d" id="nxh-faq-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">Frequently Asked Questions</h2>
<p class="nxh-section-desc-a2l">Answers to the questions we hear most often. If yours isn't here, don't hesitate to reach out directly.</p>
<div style="max-width:750px;margin:0 auto">
<div class="nxh-card-b6j" style="margin-bottom:15px">
<div class="nxh-card-body-v4k"><h3>How far in advance should I place my order?</h3><p>We recommend at least forty-eight hours for standard arrangements and two to four weeks for event or wedding orders. Same-day delivery is available for orders placed before noon if inventory allows.</p></div>
</div>
<div class="nxh-card-b6j" style="margin-bottom:15px">
<div class="nxh-card-body-v4k"><h3>What areas do you deliver to?</h3><p>We currently deliver throughout Chittenden, Washington, and Addison counties in Vermont. For event services, we travel statewide. If you're outside our standard zone, contact us and we will try to accommodate.</p></div>
</div>
<div class="nxh-card-b6j" style="margin-bottom:15px">
<div class="nxh-card-body-v4k"><h3>Can I customize my arrangement?</h3><p>Absolutely. Customization is at the heart of what we do. You can specify flower types, colors, style preferences, and even include a personal note. Our team will work with you to bring your vision to life.</p></div>
</div>
<div class="nxh-card-b6j" style="margin-bottom:15px">
<div class="nxh-card-body-v4k"><h3>Do you offer same-day delivery?</h3><p>Yes, for orders placed before noon on business days, subject to stem availability. Same-day orders are hand-delivered in our climate-controlled van to ensure freshness upon arrival.</p></div>
</div>
<div class="nxh-card-b6j" style="margin-bottom:15px">
<div class="nxh-card-body-v4k"><h3>What makes your flowers different from supermarket bouquets?</h3><p>Our stems are sourced from local farms and our own cutting garden, meaning they travel fewer miles and arrive fresher. Each arrangement is hand-composed by trained floral artisans rather than machine-assembled, resulting in superior artistry and longevity.</p></div>
</div>
<div class="nxh-card-b6j" style="margin-bottom:15px">
<div class="nxh-card-body-v4k"><h3>How do I care for my arrangement once it arrives?</h3><p>Every delivery includes a printed care card with specific instructions for your arrangement's flower types. Generally, trim stems at an angle, change water every two days, and keep away from direct sunlight and heat vents.</p></div>
</div>
<div class="nxh-card-b6j" style="margin-bottom:15px">
<div class="nxh-card-body-v4k"><h3>Can I pause or modify my subscription?</h3><p>Yes, subscriptions are fully flexible. You can pause, skip a delivery, change frequency, or cancel at any time with forty-eight hours notice before your next scheduled delivery date.</p></div>
</div>
</div>
</div>
</section>

<!-- CONTACT -->
<section class="nxh-section-r4d" id="nxh-contact-sec">
<div class="nxh-wrap-9k2">
<h2 class="nxh-section-title-u9c">Get In Touch</h2>
<p class="nxh-section-desc-a2l">We would love to hear from you. Whether you have a question, a special request, or simply want to chat about flowers, our team is here.</p>
<div class="nxh-grid-2col-m3n">
<div class="nxh-card-b6j">
<div class="nxh-card-body-v4k">
<h3>Visit Our Workshop</h3>
<p>742 Elm Street, Suite 3<br>Montpelier, Vermont 05602</p>
<p style="margin-top:10px"><strong>Phone:</strong> <a href="tel:+18025539184" class="nxh-phone-link-q1z">(802) 553-9184</a></p>
<p><strong>Email:</strong> hello@nexiliohome.com</p>
<p style="margin-top:10px"><strong>Hours:</strong><br>Monday – Friday: 8:00 AM – 6:00 PM<br>Saturday: 9:00 AM – 4:00 PM<br>Sunday: Closed</p>
</div>
</div>
<div class="nxh-card-b6j">
<div class="nxh-card-body-v4k">
<h3>Send Us a Message</h3>
<p>Fill out the details below and a member of our team will get back to you within one business day. For urgent requests, please call us directly.</p>
<div class="nxh-highlight-box-r7s"><a href="tel:+18025539184" class="nxh-cta-btn-d4f" style="font-size:14px;padding:10px 22px">Call Now: (802) 553-9184</a></div>
</div>
</div>
</div>
</div>
</section>

<!-- CTA BAR 2 -->
<section class="nxh-cta-bar-j6h">
<div class="nxh-wrap-9k2">
<h2>Let Flowers Do the Talking</h2>
<p>Place your order today and bring nature's finest into someone's world.</p>
<a href="#nxh-contact-sec" class="nxh-cta-btn-d4f">Get Started Today</a>
</div>
</section>

<!-- FOOTER -->
<footer class="nxh-footer-s7l" id="nxh-footer-sec">
<div class="nxh-wrap-9k2">
<div class="nxh-footer-grid-n2c">
<div class="nxh-footer-col-k8v">
<h4>NexilioHome</h4>
<p>Cultivating beauty and connection through handcrafted floral arrangements since 2012. Every petal has a purpose.</p>
<p style="margin-top:8px"><a href="tel:+18025539184" class="nxh-phone-link-q1z" style="color:var(--nxh7l3)">(802) 553-9184</a></p>
<p>hello@nexiliohome.com</p>
</div>
<div class="nxh-footer-col-k8v">
<h4>Quick Links</h4>
<a href="#nxh-about-sec">About Us</a>
<a href="#nxh-services-sec">Services</a>
<a href="#nxh-seasonal-sec">Seasonal Blooms</a>
<a href="#nxh-wedding-sec">Wedding Florals</a>
<a href="#nxh-corporate-sec">Corporate Programs</a>
<a href="#nxh-gallery-sec">Gallery</a>
</div>
<div class="nxh-footer-col-k8v">
<h4>More Information</h4>
<a href="#nxh-events-sec">Occasions</a>
<a href="#nxh-sustainable-sec">Sustainability</a>
<a href="#nxh-history-sec">Our History</a>
<a href="#nxh-reviews-sec">Client Reviews</a>
<a href="#nxh-faq-sec">FAQ</a>
<a href="#nxh-contact-sec">Contact Us</a>
</div>
<div class="nxh-footer-col-k8v">
<h4>Legal</h4>
<a href="javascript:void(0)" onclick="openModal('nxh-privacy-modal')">Privacy Policy</a>
<a href="javascript:void(0)" onclick="openModal('nxh-terms-modal')">Terms of Service</a>
<p style="margin-top:10px;font-size:12px;color:var(--nxh7i3)">742 Elm Street, Suite 3<br>Montpelier, VT 05602<br>Fax: (802) 553-9185</p>
</div>
</div>
<div class="nxh-footer-bottom-e9m">
<p>&copy; 2024 NexilioHome. All rights reserved. | <a href="javascript:void(0)" onclick="openModal('nxh-privacy-modal')">Privacy Policy</a> | <a href="javascript:void(0)" onclick="openModal('nxh-terms-modal')">Terms of Service</a></p>
</div>
</div>
</footer>

<!-- PRIVACY POLICY MODAL -->
<div class="nxh-modal-overlay-t6r" id="nxh-privacy-modal">
<div class="nxh-modal-box-p3f">
<button class="nxh-modal-close-y8k" onclick="closeModal('nxh-privacy-modal')">&times;</button>
<h2>Privacy Policy</h2>
<p>Last updated: January 15, 2024</p>
<p>NexilioHome ("we," "our," or "us") is committed to protecting the privacy of our customers and website visitors. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or engage with our services.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Information We Collect</h3>
<p>We may collect information that you voluntarily provide to us when you place an order, request a consultation, subscribe to our newsletter, or contact us. This includes your name, email address, phone number, delivery address, payment information, and any preferences or special instructions you share with us.</p>
<p>We also automatically collect certain technical information when you visit our website, including your IP address, browser type, operating system, referring URLs, and information about how you interact with our site. This data is collected through cookies and similar tracking technologies.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">How We Use Your Information</h3>
<p>We use the information we collect to process and fulfill your orders, communicate with you about your purchases and our services, personalize your experience and improve our website, send promotional communications (with your consent), respond to your inquiries and provide customer support, comply with legal obligations, and monitor and analyze usage and trends to improve our offerings.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Sharing of Your Information</h3>
<p>We do not sell, trade, or rent your personal information to third parties. We may share your information with trusted service providers who assist us in operating our website and conducting our business, such as payment processors, delivery partners, and email service providers. These parties are contractually obligated to keep your information confidential and secure.</p>
<p>We may also disclose your information when we believe in good faith that such disclosure is necessary to comply with applicable law, lawful process, or governmental request, or to protect the rights, privacy, property, or safety of our customers, ourselves, or others.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Cookies and Tracking Technologies</h3>
<p>Our website uses cookies and similar tracking technologies to enhance your browsing experience, analyze site traffic, and understand how visitors use our site. You can control cookie preferences through your browser settings. Disabling certain cookies may affect the functionality of our website.</p>
<p>We use both session cookies (which expire when you close your browser) and persistent cookies (which stay on your device until they expire or you delete them). Third-party analytics and advertising partners may also set their own cookies on your device when you interact with our site.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Data Security</h3>
<p>We implement commercially reasonable security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Your Rights</h3>
<p>Depending on your jurisdiction, you may have the right to access the personal information we hold about you, request correction of inaccurate data, request deletion of your data, object to or restrict certain processing activities, withdraw consent for marketing communications, and request a copy of your data in a portable format. To exercise any of these rights, please contact us at hello@nexiliohome.com or call (802) 553-9184.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Third-Party Links</h3>
<p>Our website may contain links to third-party websites or services that are not owned or controlled by NexilioHome. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party websites or services. We encourage you to review the privacy policies of any third-party sites you visit.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Children's Privacy</h3>
<p>Our services are not directed to individuals under the age of sixteen. We do not knowingly collect personal information from children. If we become aware that we have collected personal information from a child without verification of parental consent, we will take steps to delete that information promptly.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Changes to This Policy</h3>
<p>We may update this Privacy Policy from time to time to reflect changes in our practices, technologies, legal requirements, or other factors. We will post the updated policy on this page with a revised effective date. Your continued use of our website after any changes constitutes your acceptance of the updated policy.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Contact Us</h3>
<p>If you have questions or concerns about this Privacy Policy or our data practices, please contact us at:<br>NexilioHome, 742 Elm Street, Suite 3, Montpelier, VT 05602<br>Email: hello@nexiliohome.com<br>Phone: <a href="tel:+18025539184" class="nxh-phone-link-q1z">(802) 553-9184</a></p>
</div>
</div>

<!-- TERMS OF SERVICE MODAL -->
<div class="nxh-modal-overlay-t6r" id="nxh-terms-modal">
<div class="nxh-modal-box-p3f">
<button class="nxh-modal-close-y8k" onclick="closeModal('nxh-terms-modal')">&times;</button>
<h2>Terms of Service</h2>
<p>Last updated: January 15, 2024</p>
<p>Welcome to NexilioHome. These Terms of Service ("Terms") govern your use of our website and the purchase of floral products and services offered through it. By accessing our website or placing an order, you agree to be bound by these Terms. If you do not agree, please do not use our website or services.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Orders and Acceptance</h3>
<p>All orders placed through our website are subject to acceptance by NexilioHome. We reserve the right to refuse or cancel any order for any reason, including but not limited to product unavailability, errors in pricing or description, or suspected fraud. Upon acceptance, you will receive a confirmation email with your order details.</p>
<p>Product images on our website are representative. As flowers are natural products, actual arrangements may vary in size, color, and composition based on seasonal availability and grower conditions. Substitutions of equal or greater value may be made when specific varieties are unavailable.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Delivery</h3>
<p>We strive to deliver all orders on the requested date and within our stated delivery windows. Delivery times may vary due to weather, traffic, or other factors beyond our control. We are not liable for delays caused by circumstances beyond our reasonable control, including acts of nature, carrier disruptions, or recipient unavailability.</p>
<p>If a recipient is unavailable at the time of delivery, our driver will follow the delivery instructions provided at checkout, which may include leaving the arrangement in a safe location or attempting redelivery. NexilioHome is not responsible for the condition of arrangements left unattended at the recipient's location.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Cancellations and Modifications</h3>
<p>Orders may be cancelled or modified without charge if the request is received at least forty-eight hours before the scheduled delivery date. Cancellations or modifications within forty-eight hours may incur a fee equal to a portion of the order value to cover materials already committed. Same-day orders cannot be cancelled once processing has begun.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Satisfaction Guarantee</h3>
<p>We stand behind the quality of our floral arrangements. If you are dissatisfied with your order for any reason, please contact us within twenty-four hours of delivery with a description and photograph of the issue. We will offer a replacement arrangement, a credit toward a future order, or another remedy at our discretion. Our guarantee does not cover issues arising from improper care after delivery.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Intellectual Property</h3>
<p>All content on this website, including but not limited to text, graphics, logos, images, and design elements, is the property of NexilioHome and is protected by applicable intellectual property laws. You may not reproduce, distribute, modify, or create derivative works from any content on this website without our prior written consent.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Limitation of Liability</h3>
<p>To the fullest extent permitted by law, NexilioHome shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from your use of our website or services, even if we have been advised of the possibility of such damages. Our total liability for any claim arising from or related to your use of our services shall not exceed the amount you paid for the specific order giving rise to the claim.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Indemnification</h3>
<p>You agree to indemnify, defend, and hold harmless NexilioHome, its officers, directors, employees, and agents from and against any claims, liabilities, damages, losses, and expenses arising from your use of our website or services, your violation of these Terms, or your violation of any rights of another party.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Governing Law</h3>
<p>These Terms shall be governed by and construed in accordance with the laws of the State of Vermont, without regard to its conflict of law provisions. Any disputes arising under or in connection with these Terms shall be resolved exclusively in the state or federal courts located in Washington County, Vermont, and you consent to the personal jurisdiction of such courts.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Changes to These Terms</h3>
<p>We reserve the right to modify these Terms at any time. Changes will be posted on this page with an updated effective date. Your continued use of our website following any changes constitutes acceptance of the revised Terms. We encourage you to review these Terms periodically.</p>
<h3 style="margin-top:15px;color:var(--nxh7a3);font-size:18px">Contact Information</h3>
<p>For questions about these Terms of Service, please contact us at:<br>NexilioHome, 742 Elm Street, Suite 3, Montpelier, VT 05602<br>Email: hello@nexiliohome.com<br>Phone: <a href="tel:+18025539184" class="nxh-phone-link-q1z">(802) 553-9184</a></p>
</div>
</div>

<script>
function openModal(id){document.getElementById(id).classList.add('active');document.body.style.overflow='hidden'}
function closeModal(id){document.getElementById(id).classList.remove('active');document.body.style.overflow='auto'}
document.querySelectorAll('.nxh-modal-overlay-t6r').forEach(function(m){m.addEventListener('click',function(e){if(e.target===m){closeModal(m.id)}})});
document.addEventListener('keydown',function(e){if(e.key==='Escape'){document.querySelectorAll('.nxh-modal-overlay-t6r.active').forEach(function(m){closeModal(m.id)})}});
document.querySelectorAll('.nxh-nav-j3b a').forEach(function(a){a.addEventListener('click',function(){document.querySelector('.nxh-nav-j3b').classList.remove('show')})});
</script>
</body>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">

</html>
