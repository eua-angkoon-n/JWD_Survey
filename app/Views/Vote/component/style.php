<style>
    * {
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-text-size-adjust: none;
    font-family: -apple-system,"Helvetica Neue",Helvetica,Arial,sans-serif
}

.demo-container {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    box-sizing: border-box;
    position: relative;
    width: 100%;
    max-width: 400px;
    height: 300px;
    padding: 20px;
    text-align: center;
    margin: 0 auto;
}

@media screen and (max-width: 479px) {
    .demo-container {
        padding:10px
    }
}

.demo-container h1 {
    font-size: 14px;
    font-weight: 500;
    margin-top: -5px;
    margin-bottom: 20px;
    color: #6E787C
}

.touch-marker {
    position: absolute;
    width: 145px;
    height: 145px;
    border-radius: 50%;
    background: rgba(255,255,255,0.5);
    box-shadow: 0 0 0 1px rgba(0,0,0,0.05),0 4px 6px rgba(0,0,0,0.06);
    -webkit-transform: scale(2);
    transform: scale(2);
    opacity: 0;
    transition-property: -webkit-transform,opacity;
    transition-property: transform,opacity;
    transition-duration: .25s;
    transition-timing-function: cubic-bezier(.215, .61, .355, 1);
    pointer-events: none;
    will-change: transform
}

.show-touch .touch-marker {
    -webkit-transform: none;
    transform: none;
    opacity: 1
}

.rating-control {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    position: relative;
    padding-bottom: 9px
}

.rating-control::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 8px;
    top: 50%;
    margin-top: -13px;
    margin-left: 17px;
    margin-right: 30px;
    background-color: #E9ECEE
}

.rating-control .current-rating {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: absolute;
    width: 20%;
    height: 55px;
    top: 0;
    left: 0;
    will-change: transform;
    cursor: -webkit-grab;
    cursor: grab
}

.rating-control .current-rating:active {
    cursor: -webkit-grabbing;
    cursor: grabbing
}

.rating-control .current-rating .svg-wrapper {
    position: relative;
    width: 145px;
    height: 145px;
    border-radius: 50%;
    box-shadow: 0 3px 5px rgba(0,0,0,0.08);
    pointer-events: none
}

.rating-control .current-rating .svg-wrapper svg {
    position: absolute;
    width: 155px;
    height: 155px;
    top: 0;
    right: 3px;
    will-change: transform
}

@media (-webkit-min-device-pixel-ratio: 2),(min-device-pixel-ratio:2),(min-resolution:2dppx) {
    .rating-control .current-rating .svg-wrapper svg {
        -webkit-transform:translate(.5px, .5px);
        transform: translate(.5px, .5px)
    }
}

.rating-control .current-rating .touch-marker {
    bottom: -10px;
    left: 0%;
    margin-left: -5px
}

.rating-control .rating-option {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    position: relative;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin-top: 9px;
    cursor: pointer;
    -webkit-tap-highlight-color: rgba(0,0,0,0)
}

.rating-control .rating-option:active .icon svg .base,.rating-control .rating-option.active .icon svg .base {
    fill: #8B959A
}

.rating-control .rating-option:active .label,.rating-control .rating-option.active .label {
    color: #313B3F !important
}

.rating-control .rating-option .icon {
    width: 144px;
    height: 144px;
    will-change: transform;
    pointer-events: none
}

.rating-control .rating-option .icon svg {
    display: block
}

.rating-control .rating-option .icon svg .base {
    transition: fill .1s ease-in-out
}

.rating-control .rating-option .label {
    font-size: 24px;
    font-weight: 500;
    color: #ABB2B6;
    margin-top: 8px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    pointer-events: none;
    will-change: transform;
    transition: color .1s ease-in-out
}

.rating-control .rating-option .label.no-transition {
    transition: none
}

.rating-control .rating-option .touch-marker {
    bottom: 15px;
    left: 50%;
    margin-left: -18px
}

</style>