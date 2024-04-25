<?php 
require_once __DIR__ . "/component/style.php";
?>
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-12 text-center">
                    <h1 class="m-0" style="font-weight: bold">ประเมินความพึงพอใจ</h1>
                    <h2><small><?php echo $SiteName." ".$LocationName ?></small></h2>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-content-center">

            <div class="demo-container justify-content-center">
                <div class="rating-control justify-content-center">
                    <div class="rating-option mr-3" rating="1" selected-fill="#FFA98D">
                        <div class="icon">
                            <svg width="100%" height="100%" viewBox="0 0 50 50">
                                <path
                                    d="M50,25 C50,38.807 38.807,50 25,50 C11.193,50 0,38.807 0,25 C0,11.193 11.193,0 25,0 C38.807,0 50,11.193 50,25"
                                    class="base" fill="#C6CCD0"></path>
                                <path
                                    d="M25,31.5 C21.3114356,31.5 17.7570324,32.4539319 14.6192568,34.2413572 C13.6622326,34.7865234 13.3246514,36.0093483 13.871382,36.9691187 C14.4181126,37.9288892 15.6393731,38.2637242 16.5991436,37.7169936 C19.1375516,36.2709964 22.0103269,35.5 25,35.5 C27.9896731,35.5 30.8610304,36.2701886 33.4008564,37.7169936 C34.3606269,38.2637242 35.5818874,37.9288892 36.128618,36.9691187 C36.6753486,36.0093483 36.3405137,34.7880878 35.3807432,34.2413572 C32.2429676,32.4539319 28.6885644,31.5 25,31.5 Z"
                                    class="mouth" fill="#FFFFFF"></path>
                                <path
                                    d="M30.6486386,16.8148522 C31.1715727,16.7269287 31.2642212,16.6984863 31.7852173,16.6140137 C32.3062134,16.529541 33.6674194,16.3378906 34.5824585,16.1715729 C35.4974976,16.0052551 35.7145386,15.9660737 36.4964248,15.8741891 C36.6111841,15.9660737 36.7220558,16.0652016 36.8284271,16.1715729 C37.7752853,17.118431 38.1482096,18.4218859 37.9472002,19.6496386 C37.8165905,20.4473941 37.4436661,21.2131881 36.8284271,21.8284271 C35.26633,23.3905243 32.73367,23.3905243 31.1715729,21.8284271 C29.8093655,20.4662198 29.6350541,18.3659485 30.6486386,16.8148522 Z"
                                    class="right-eye" fill="#FFFFFF"></path>
                                <path
                                    d="M18.8284271,21.8284271 C20.1906345,20.4662198 20.3649459,18.3659485 19.3513614,16.8148522 C18.8284273,16.7269287 18.7357788,16.6984863 18.2147827,16.6140137 C17.6937866,16.529541 16.3325806,16.3378906 15.4175415,16.1715729 C14.5025024,16.0052551 14.2854614,15.9660737 13.5035752,15.8741891 C13.3888159,15.9660737 13.2779442,16.0652016 13.1715729,16.1715729 C12.2247147,17.118431 11.8517904,18.4218859 12.0527998,19.6496386 C12.1834095,20.4473941 12.5563339,21.2131881 13.1715729,21.8284271 C14.73367,23.3905243 17.26633,23.3905243 18.8284271,21.8284271 Z"
                                    class="left-eye" fill="#FFFFFF"></path>
                            </svg>
                        </div>
                        <div class="label">ปรับปรุง</div>
                        <div class="touch-marker"></div>
                    </div>
                    <div class="rating-option mr-3" rating="2" selected-fill="#FFC385">
                        <div class="icon">
                            <svg width="100%" height="100%" viewBox="0 0 50 50">
                                <path
                                    d="M50,25 C50,38.807 38.807,50 25,50 C11.193,50 0,38.807 0,25 C0,11.193 11.193,0 25,0 C38.807,0 50,11.193 50,25"
                                    class="base" fill="#C6CCD0"></path>
                                <path
                                    d="M25,31.9996 C21.7296206,31.9996 18.6965022,32.5700242 15.3353795,33.7542598 C14.2935825,34.1213195 13.7466,35.2634236 14.1136598,36.3052205 C14.4807195,37.3470175 15.6228236,37.894 16.6646205,37.5269402 C19.617541,36.4865279 22.2066846,35.9996 25,35.9996 C28.1041177,35.9996 31.5196849,36.5918872 33.0654841,37.4088421 C34.0420572,37.924961 35.2521232,37.5516891 35.7682421,36.5751159 C36.284361,35.5985428 35.9110891,34.3884768 34.9345159,33.8723579 C32.7065288,32.6948667 28.6971052,31.9996 25,31.9996 Z"
                                    class="mouth" fill="#FFFFFF"></path>
                                <path
                                    d="M30.7014384,16.8148522 C30.8501714,16.5872449 31.0244829,16.3714627 31.2243727,16.1715729 C32.054483,15.3414625 33.1586746,14.9524791 34.2456496,15.0046227 C34.8805585,15.7858887 34.945378,15.8599243 35.5310714,16.593811 C36.1167648,17.3276978 36.1439252,17.3549194 36.5988813,17.9093628 C37.0538374,18.4638062 37.2801558,18.7149658 38,19.6496386 C37.8693903,20.4473941 37.496466,21.2131881 36.8812269,21.8284271 C35.3191298,23.3905243 32.7864699,23.3905243 31.2243727,21.8284271 C29.8621654,20.4662198 29.6878539,18.3659485 30.7014384,16.8148522 Z"
                                    class="right-eye" fill="#FFFFFF"></path>
                                <path
                                    d="M18.8284271,21.8284271 C20.1906345,20.4662198 20.3649459,18.3659485 19.3513614,16.8148522 C19.2026284,16.5872449 19.0283169,16.3714627 18.8284271,16.1715729 C17.9983168,15.3414625 16.8941253,14.9524791 15.8071502,15.0046227 C15.1722413,15.7858887 15.1074218,15.8599243 14.5217284,16.593811 C13.9360351,17.3276978 13.9088746,17.3549194 13.4539185,17.9093628 C12.9989624,18.4638062 12.772644,18.7149658 12.0527998,19.6496386 C12.1834095,20.4473941 12.5563339,21.2131881 13.1715729,21.8284271 C14.73367,23.3905243 17.26633,23.3905243 18.8284271,21.8284271 Z"
                                    class="left-eye" fill="#FFFFFF"></path>
                            </svg>
                        </div>
                        <div class="label">พอใจ</div>
                        <div class="touch-marker"></div>
                    </div>
                    <div class="rating-option mr-3" rating="3">
                        <div class="icon">
                            <svg width="100%" height="100%" viewBox="0 0 50 50">
                                <path
                                    d="M50,25 C50,38.807 38.807,50 25,50 C11.193,50 0,38.807 0,25 C0,11.193 11.193,0 25,0 C38.807,0 50,11.193 50,25"
                                    class="base" fill="#C6CCD0"></path>
                                <path
                                    d="M25.0172185,32.7464719 C22.4651351,33.192529 19.9789584,33.7240143 17.4783686,34.2837667 C16.4004906,34.5250477 15.7222686,35.5944568 15.9635531,36.6723508 C16.2048377,37.7502449 17.2738374,38.4285417 18.3521373,38.1871663 C20.8031673,37.6385078 23.2056119,37.1473427 25.7416475,36.6803253 C28.2776831,36.2133079 30.8254642,35.7953113 33.3839467,35.4267111 C34.4772031,35.2692059 35.235822,34.2552362 35.0783131,33.1619545 C34.9208042,32.0686729 33.89778,31.3113842 32.8135565,31.4675881 C30.2035476,31.8436117 27.6044107,32.2700339 17.4783686,34.2837667 Z"
                                    class="mouth" fill="#FFFFFF"></path>
                                <path
                                    d="M30.6486386,16.8148522 C30.7973716,16.5872449 30.9716831,16.3714627 31.1715729,16.1715729 C32.0016832,15.3414625 33.1058747,14.9524791 34.1928498,15.0046227 C35.0120523,15.0439209 35.8214759,15.3337764 36.4964248,15.8741891 C36.6111841,15.9660737 36.7220558,16.0652016 36.8284271,16.1715729 C37.7752853,17.118431 38.1482096,18.4218859 37.9472002,19.6496386 C37.8165905,20.4473941 37.4436661,21.2131881 36.8284271,21.8284271 C35.26633,23.3905243 32.73367,23.3905243 31.1715729,21.8284271 C29.8093655,20.4662198 29.6350541,18.3659485 30.6486386,16.8148522 Z"
                                    class="right-eye" fill="#FFFFFF"></path>
                                <path
                                    d="M18.8284271,21.8284271 C20.1906345,20.4662198 20.3649459,18.3659485 19.3513614,16.8148522 C19.2026284,16.5872449 19.0283169,16.3714627 18.8284271,16.1715729 C17.9983168,15.3414625 16.8941253,14.9524791 15.8071502,15.0046227 C14.9879477,15.0439209 14.1785241,15.3337764 13.5035752,15.8741891 C13.3888159,15.9660737 13.2779442,16.0652016 13.1715729,16.1715729 C12.2247147,17.118431 11.8517904,18.4218859 12.0527998,19.6496386 C12.1834095,20.4473941 12.5563339,21.2131881 13.1715729,21.8284271 C14.73367,23.3905243 17.26633,23.3905243 18.8284271,21.8284271 Z"
                                    class="left-eye" fill="#FFFFFF"></path>
                            </svg>
                        </div>
                        <div class="label">ปานกลาง</div>
                        <div class="touch-marker"></div>
                    </div>
                    <div class="rating-option mr-3" rating="4">
                        <div class="icon">
                            <svg width="100%" height="100%" viewBox="0 0 50 50">
                                <path
                                    d="M50,25 C50,38.807 38.807,50 25,50 C11.193,50 0,38.807 0,25 C0,11.193 11.193,0 25,0 C38.807,0 50,11.193 50,25"
                                    class="base" fill="#C6CCD0"></path>
                                <path
                                    d="M25,35 C21.9245658,35 18.973257,34.1840075 16.3838091,32.6582427 C15.4321543,32.0975048 14.2061178,32.4144057 13.64538,33.3660605 C13.0846422,34.3177153 13.401543,35.5437517 14.3531978,36.1044896 C17.5538147,37.9903698 21.2054786,39 25,39 C28.7945214,39 32.4461853,37.9903698 35.6468022,36.1044896 C36.598457,35.5437517 36.9153578,34.3177153 36.35462,33.3660605 C35.7938822,32.4144057 34.5678457,32.0975048 33.6161909,32.6582427 C31.026743,34.1840075 28.0754342,35 25,35 Z"
                                    class="mouth" fill="#FFFFFF"></path>
                                <path
                                    d="M30.6486386,16.8148522 C30.7973716,16.5872449 30.9716831,16.3714627 31.1715729,16.1715729 C32.0016832,15.3414625 33.1058747,14.9524791 34.1928498,15.0046227 C35.0120523,15.0439209 35.8214759,15.3337764 36.4964248,15.8741891 C36.6111841,15.9660737 36.7220558,16.0652016 36.8284271,16.1715729 C37.7752853,17.118431 38.1482096,18.4218859 37.9472002,19.6496386 C37.8165905,20.4473941 37.4436661,21.2131881 36.8284271,21.8284271 C35.26633,23.3905243 32.73367,23.3905243 31.1715729,21.8284271 C29.8093655,20.4662198 29.6350541,18.3659485 30.6486386,16.8148522 Z"
                                    class="right-eye" fill="#FFFFFF"></path>
                                <path
                                    d="M18.8284271,21.8284271 C20.1906345,20.4662198 20.3649459,18.3659485 19.3513614,16.8148522 C19.2026284,16.5872449 19.0283169,16.3714627 18.8284271,16.1715729 C17.9983168,15.3414625 16.8941253,14.9524791 15.8071502,15.0046227 C14.9879477,15.0439209 14.1785241,15.3337764 13.5035752,15.8741891 C13.3888159,15.9660737 13.2779442,16.0652016 13.1715729,16.1715729 C12.2247147,17.118431 11.8517904,18.4218859 12.0527998,19.6496386 C12.1834095,20.4473941 12.5563339,21.2131881 13.1715729,21.8284271 C14.73367,23.3905243 17.26633,23.3905243 18.8284271,21.8284271 Z"
                                    class="left-eye" fill="#FFFFFF"></path>
                            </svg>
                        </div>
                        <div class="label">ดีมาก</div>
                        <div class="touch-marker"></div>
                    </div>
                    <div class="rating-option mr-3" rating="5">
                        <div class="icon">
                            <svg width="100%" height="100%" viewBox="0 0 50 50">
                                <path
                                    d="M50,25 C50,38.807 38.807,50 25,50 C11.193,50 0,38.807 0,25 C0,11.193 11.193,0 25,0 C38.807,0 50,11.193 50,25"
                                    class="base" fill="#C6CCD0"></path>
                                <path
                                    d="M25.0931396,31 C22.3332651,31 16.6788329,31 13.0207,31 C12.1907788,31 11.6218259,31.4198568 11.2822542,32.0005432 C10.9061435,32.6437133 10.8807853,33.4841868 11.3937,34.17 C14.4907,38.314 19.4277,41 24.9997,41 C30.5727,41 35.5097,38.314 38.6067,34.17 C39.0848493,33.5300155 39.0947422,32.7553501 38.7884086,32.1320187 C38.4700938,31.4843077 37.8035583,31 36.9797,31 C34.3254388,31 28.6616205,31 25.0931396,31 Z"
                                    class="mouth" fill="#FFFFFF"></path>
                                <path
                                    d="M30.6486386,16.8148522 C30.7973716,16.5872449 30.9716831,16.3714627 31.1715729,16.1715729 C32.0016832,15.3414625 33.1058747,14.9524791 34.1928498,15.0046227 C35.0120523,15.0439209 35.8214759,15.3337764 36.4964248,15.8741891 C36.6111841,15.9660737 36.7220558,16.0652016 36.8284271,16.1715729 C37.7752853,17.118431 38.1482096,18.4218859 37.9472002,19.6496386 C37.8165905,20.4473941 37.4436661,21.2131881 36.8284271,21.8284271 C35.26633,23.3905243 32.73367,23.3905243 31.1715729,21.8284271 C29.8093655,20.4662198 29.6350541,18.3659485 30.6486386,16.8148522 Z"
                                    class="right-eye" fill="#FFFFFF"></path>
                                <path
                                    d="M18.8284271,21.8284271 C20.1906345,20.4662198 20.3649459,18.3659485 19.3513614,16.8148522 C19.2026284,16.5872449 19.0283169,16.3714627 18.8284271,16.1715729 C17.9983168,15.3414625 16.8941253,14.9524791 15.8071502,15.0046227 C14.9879477,15.0439209 14.1785241,15.3337764 13.5035752,15.8741891 C13.3888159,15.9660737 13.2779442,16.0652016 13.1715729,16.1715729 C12.2247147,17.118431 11.8517904,18.4218859 12.0527998,19.6496386 C12.1834095,20.4473941 12.5563339,21.2131881 13.1715729,21.8284271 C14.73367,23.3905243 17.26633,23.3905243 18.8284271,21.8284271 Z"
                                    class="left-eye" fill="#FFFFFF"></path>
                            </svg>
                        </div>
                        <div class="label">ดีเยี่ยม</div>
                        <div class="touch-marker"></div>
                    </div>
                    <div class="current-rating">
                        <div class="svg-wrapper"></div>
                        <div class="touch-marker"></div>
                    </div>
                </div>
            </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.3/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.3/dist/sweetalert2.min.js"></script>
<script>
 $(document).ready(function () {
     var RatingControl = function (element) {
         var self = this;
         self.containerElement = element;
         self.selectedRatingElement = self.containerElement.find(".current-rating");
         self.selectedRatingSVGContainer = self.selectedRatingElement.find(".svg-wrapper");
         self.ratingElements = self.containerElement.find(".rating-option").map(function () {
             var element = $(this);
             return {
                 container: element,
                 icon: element.find(".icon"),
                 label: element.find(".label"),
                 selectedFill: self.hexToRGB(element.attr("selected-fill") || "#FFD885")
             };
         }).get();

         self.selectedRating;
         self.sliderPosition = 0;
         self.facePaths = [];
         self.labelColor = self.hexToRGB("#ABB2B6");
         self.labelSelectedColor = self.hexToRGB("#313B3F");
         self.dragging = false;
         self.handleDragOffset = 0;
         self.ratingTouchStartPosition = {
             x: 0,
             y: 0
         };
         self.onRatingChange = function () {};
         self.easings = {
             easeInOutCubic: function (t, b, c, d) {
                 if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
                 return c / 2 * ((t -= 2) * t * t + 2) + b;
             },
             easeInOutQuad: function (t, b, c, d) {
                 if ((t /= d / 2) < 1) return c / 2 * t * t + b;
                 return -c / 2 * ((--t) * (t - 2) - 1) + b;
             },
             linear: function (t, b, c, d) {
                 return c * t / d + b;
             }
         };

         self.onHandleDrag = self.onHandleDrag.bind(this);
         self.onHandleRelease = self.onHandleRelease.bind(this);

         self.ratingElements.forEach(function (element) {
             // Copy face path data from HTML
             var paths = {};
             element.icon.find("path:not(.base)").each(function () {
                 var path = $(this);
                 var pathStr = path.attr("d");
                 paths[path.attr("class")] = self.splitString(pathStr);
             });
             self.facePaths.push(paths);
             // On rating selected
             element.container.on("click touchend", function (e) {
                 if (e.type === "touchend") {
                     var ratingTouchCurrentPosition = {
                         x: e.pageX,
                         y: e.pageY
                     };
                     var dragDistance = Math.sqrt(Math.pow(ratingTouchCurrentPosition.x - self.ratingTouchStartPosition.x, 2) + Math.pow(ratingTouchCurrentPosition.y - self.ratingTouchStartPosition.y, 2));
                     if (dragDistance > 10) {
                         return;
                     }
                 }
                 var newRating = element.container.attr("rating") - 1;
                 self.setRating(newRating, {
                     fireChange: true
                 });
             });
         });

         if ("ontouchend" in document) {
             $(document.body).on("touchstart", function (e) {
                 if ($(e.target).hasClass("rating-option")) {
                     self.ratingTouchStartPosition = {
                         x: e.touches[0].pageX,
                         y: e.touches[0].pageY
                     };
                 }
             });
             self.selectedRatingElement.on("touchstart", function (e) {
                 self.dragging = true;
                 self.handleDragOffset = e.touches[0].pageX - self.selectedRatingElement.offset().left;
                 self.setLabelTransitionEnabled(false);
             });
             self.selectedRatingElement.on("touchmove", self.onHandleDrag);
             self.selectedRatingElement.on("touchend", self.onHandleRelease);
         } else {
             $(document.body).on("mousedown", function (e) {
                 if ($(e.target).is(self.selectedRatingElement)) {
                     e.preventDefault();
                     self.dragging = true;
                     self.handleDragOffset = e.offsetX;
                     self.setLabelTransitionEnabled(false);
                     $(document.body).addClass("dragging");
                     $(document.body).on("mousemove", self.onHandleDrag);
                 }
             });
             $(document.body).on("mouseup", function (e) {
                 if (self.dragging) {
                     $(document.body).removeClass("dragging");
                     $(document.body).off("mousemove", self.onHandleDrag);
                     self.onHandleRelease(e);
                 }
             });
         }

         self.setRating(3, {
             duration: 0
         });
     }

     RatingControl.prototype = {
         setRating: function (rating, options) {
             var self = this;
             var options = options || {};
             var startTime;
             var fireChange = options.fireChange || false;
             var onComplete = options.onComplete || function () {};
             var easing = options.easing || self.easings.easeInOutCubic;
             var duration = options.duration == undefined ? 550 : options.duration;
             var startXPosition = self.sliderPosition;
             var endXPosition = rating * self.selectedRatingElement.width();

             if (duration > 0) {
                 var anim = function (timestamp) {
                     startTime = startTime || timestamp;
                     var elapsed = timestamp - startTime;
                     var progress = easing(elapsed, startXPosition, endXPosition - startXPosition, duration);
                     self.setSliderPosition(progress);
                     if (elapsed < duration) {
                         requestAnimationFrame(anim);
                     } else {
                         self.setSliderPosition(endXPosition);
                         self.setLabelTransitionEnabled(true);
                         if (self.onRatingChange && self.selectedRating != rating && fireChange) {
                             self.onRatingChange(rating);
                         }
                         onComplete();
                         self.selectedRating = rating;
                     }
                 };

                 self.setLabelTransitionEnabled(false);
                 requestAnimationFrame(anim);
             } else {
                 self.setSliderPosition(endXPosition);
                 if (self.onRatingChange && self.selectedRating != rating && fireChange) {
                     self.onRatingChange(rating);
                 }
                 onComplete();
                 self.selectedRating = rating;
             }
         },

         setSliderPosition: function (position) {
             var self = this;
             self.sliderPosition = Math.min(Math.max(0, position), self.containerElement.width() - self.selectedRatingElement.width());
             var stepProgress = self.sliderPosition / self.containerElement.width() * self.ratingElements.length;
             var relativeStepProgress = stepProgress - Math.floor(stepProgress);
             var currentStep = Math.round(stepProgress);
             var startStep = Math.floor(stepProgress);
             var endStep = Math.ceil(stepProgress);
             // Move handle
             self.selectedRatingElement.css("transform", "translateX(" + (self.sliderPosition / self.selectedRatingElement.width() * 100) + "%)");
             // Set face
             var startPaths = self.facePaths[startStep];
             var endPaths = self.facePaths[endStep];
             var interpolatedPaths = {};
             for (var featurePath in startPaths) {
                 if (startPaths.hasOwnProperty(featurePath)) {
                     var startPath = startPaths[featurePath];
                     var endPath = endPaths[featurePath];
                     var interpolatedPoints = self.interpolatedArray(startPath.digits, endPath.digits, relativeStepProgress);
                     var interpolatedPath = self.recomposeString(interpolatedPoints, startPath.nondigits);
                     interpolatedPaths[featurePath] = interpolatedPath;
                 }
             }
             var interpolatedFill = self.interpolatedColor(self.ratingElements[startStep]["selectedFill"], self.ratingElements[endStep]["selectedFill"], relativeStepProgress);
             self.selectedRatingSVGContainer.html('<svg width="55px" height="55px" viewBox="0 0 50 50"><path d="M50,25 C50,38.807 38.807,50 25,50 C11.193,50 0,38.807 0,25 C0,11.193 11.193,0 25,0 C38.807,0 50,11.193 50,25" class="base" fill="' + interpolatedFill + '"></path><path d="' + interpolatedPaths["mouth"] + '" class="mouth" fill="#655F52"></path><path d="' + interpolatedPaths["right-eye"] + '" class="right-eye" fill="#655F52"></path><path d="' + interpolatedPaths["left-eye"] + '" class="left-eye" fill="#655F52"></path></svg>');
             // Update marker icon/label
             self.ratingElements.forEach(function (element, index) {
                 var adjustedProgress = 1;
                 if (index == currentStep) {
                     adjustedProgress = 1 - Math.abs((stepProgress - Math.floor(stepProgress) - 0.5) * 2);
                 }
                 element.icon.css("transform", "scale(" + adjustedProgress + ")");
                 element.label.css("transform", "translateY(" + self.interpolatedValue(9, 0, adjustedProgress) + "px)");
                 element.label.css("color", self.interpolatedColor(self.labelSelectedColor, self.labelColor, adjustedProgress));
             });
         },

         onHandleDrag: function (e) {
             var self = this;
             e.preventDefault();
             if (e.originalEvent.touches) {
                 e = e.originalEvent.touches[0];
             }
             var offset = self.selectedRatingElement.width() / 2 - self.handleDragOffset;
             var xPos = e.clientX - self.containerElement.offset().left;
             self.setSliderPosition(xPos - self.selectedRatingElement.width() / 2 + offset);
         },

         onHandleRelease: function (e) {
             var self = this;
             self.dragging = false;
             self.setLabelTransitionEnabled(true);
             var rating = Math.round(self.sliderPosition / self.containerElement.width() * self.ratingElements.length);
             self.setRating(rating, {
                 duration: 200,
                 fireChange: true
             });
         },

         setLabelTransitionEnabled: function (enabled) {
             var self = this;
             self.ratingElements.forEach(function (element) {
                 if (enabled) {
                     element.label.removeClass("no-transition");
                 } else {
                     element.label.addClass("no-transition");
                 }
             });
         },

         interpolatedValue: function (startValue, endValue, progress) {
             return (endValue - startValue) * progress + startValue;
         },

         interpolatedArray: function (startArray, endArray, progress) {
             return startArray.map(function (startValue, index) {
                 return (endArray[index] - startValue) * progress + startValue;
             });
         },

         interpolatedColor: function (startColor, endColor, progress) {
             var self = this;
             var interpolatedRGB = self.interpolatedArray(startColor, endColor, progress).map(function (channel) {
                 return Math.round(channel);
             });
             return "rgba(" + interpolatedRGB[0] + "," + interpolatedRGB[1] + "," + interpolatedRGB[2] + ",1)";
         },

         easeInQuint: function (t, b, c, d) {
             return c * (t /= d) * t * t + b;
         },

         hexToRGB: function (hex) {
             var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
             hex = hex.replace(shorthandRegex, function (m, r, g, b) {
                 return r + r + g + g + b + b;
             });
             var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
             return result ? [
                 parseInt(result[1], 16),
                 parseInt(result[2], 16),
                 parseInt(result[3], 16)
             ] : null;
         },

         splitString: function (value) {
             var re = /-?\d*\.?\d+/g;
             var toStr = function (val) {
                 return typeof val == "string" ? val : String(val);
             };
             return {
                 digits: toStr(value).match(re).map(Number),
                 nondigits: toStr(value).split(re)
             };
         },

         recomposeString: function (digits, nondigits) {
             return nondigits.reduce(function (a, b, i) {
                 return a + digits[i - 1] + b;
             });
         },

         simulateRatingTap(rating, delay, complete) {
             var self = this;
             var ratingElement = self.ratingElements[rating];
             setTimeout(function () {
                 ratingElement.container.addClass("show-touch");
                 setTimeout(function () {
                     ratingElement.container.removeClass("show-touch");
                     self.setRating(rating, {
                         onComplete: function () {
                             if (complete) {
                                 complete();
                             }
                         }
                     });
                 }, 250);
             }, delay || 0);
         },

         simulateRatingDrag(rating, delay, complete) {
             var self = this;
             setTimeout(function () {
                 self.selectedRatingElement.addClass("show-touch");
                 setTimeout(function () {
                     self.setRating(rating, {
                         duration: 3000,
                         easing: self.easings.easeInOutQuad,
                         onComplete: function () {
                             self.selectedRatingElement.removeClass("show-touch");
                             if (complete) {
                                 complete();
                             }
                         }
                     });
                 }, 250);
             }, delay || 0);
         }
     }

     $(".demo-container").addClass("clip-marker");
     var ratingControl = new RatingControl($(".rating-control"));

     const time = 120000;

     $('.rating-option').on('click', function () {
         var rate = $(this).attr('rating');
         // console.log('Rated:', rate);
         clearInterval(refreshInterval);
         //////////
         setTimeout(() => {
             Swal.fire({
                 title: 'ยืนยัน',
                 text: 'ต้องการให้คะแนนหรือไม่?',
                 icon: 'warning',
                 showCancelButton: true,
                 confirmButtonText: 'ยืนยัน',
                 cancelButtonText: 'ยกเลิก',
                //  input: 'text', // ตัวกรอกทะเบียนรถ ***************************************************
                //  inputLabel: 'กรุณากรอกทะเบียนรถ',
                //  inputPlaceholder: 'กรอกทะเบียนรถ',
             }).then((result) => {
                 if (result.isConfirmed) {

                     let textInputValue = null;
                     if (result.value !== null && result.value !== "") {
                         textInputValue = result.value;
                     }
                     $.ajax({
                         url: "app/Controllers/AjaxController.php",
                         type: "POST",
                         data: {
                             "rate": rate,
                             "location": '<?php echo $_REQUEST['location']?>',
                             "vehicle": textInputValue,
                             "action": "SendVote"
                         },
                         beforeSend: function () {},
                         success: function (data) {
                             clearInterval(refreshInterval);
                             alertCountDown(data);
                             return;
                         },
                         error: function (textStatus, errorThrown) {
                             alertCountDown();
                             console.log(data);
                             // alert(errorThrown);
                             // sweetAlert("ผิดพลาด!", "ไม่สามารถบันทึกข้อมูลได้", "error");
                         }
                     });
                     event.preventDefault();
                 } else {
                    setInterval(() => {
                        location.reload(true);
                    }, time);
                     event.preventDefault();
                     return;
                 }
             });
         }, 500);
         return;
     });

     const refreshInterval = setInterval(() => {
        location.reload(true);
    }, time); // 120000 มีค่าเท่ากับ 2 นาที

     function alertCountDown(data) {
        console.log(data);
        Swal.fire({
                title: 'ขอบคุณสำหรับการให้คะแนน',
                html: 'จะปิดอัตโนมัติใน <strong></strong> วินาที',
                timer: 30000,
                showConfirmButton: false,
                allowOutsideClick: false,
                didOpen: () => {
                    // อัปเดตเวลาทุกวินาที
                    const content = Swal.getHtmlContainer();
                    const strong = content.querySelector('strong');
                    timerInterval = setInterval(() => {
                        const remainingTime = Swal.getTimerLeft();
                        strong.textContent = (remainingTime / 1000).toFixed(0);
                    }, 1000);
                },
                willClose: () => {
                    clearInterval(timerInterval); // หยุดอัปเดตเวลาเมื่อ SweetAlert ปิด
                }
            }).then((result) => {
                location.reload(true);
            });
    }
 });
</script>