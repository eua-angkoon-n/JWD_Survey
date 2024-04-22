<style>
    .feedback {
    --normal: #ECEAF3;
    --normal-shadow: #D9D8E3;
    --normal-mouth: #9795A4;
    --normal-eye: #595861;
    --active: #F8DA69;
    --active-shadow: #F4B555;
    --active-mouth: #F05136;
    --active-eye: #313036;
    --active-tear: #76b5e7;
    --active-shadow-angry: #e94f1d;
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    justify-content: center;
    li {
        position: relative;
        border-radius: 50%;
        background: var(--sb, var(--normal));
        box-shadow: inset 3px -3px 4px var(--sh, var(--normal-shadow));
        transition: background .4s, box-shadow .4s, transform .3s;
        -webkit-tap-highlight-color: transparent;
        &:not(:last-child) {
            margin-right: 20px;
        }
        div {
            width: 40px;
            height: 40px;
            position: relative;
            transform: perspective(240px) translateZ(4px);
            svg,
            &:before,
            &:after {
                display: block;
                position: absolute;
                left: var(--l, 9px);
                top: var(--t, 13px);
                width: var(--w, 8px);
                height: var(--h, 2px);
                transform: rotate(var(--r, 0deg)) scale(var(--sc, 1)) translateZ(0);
            }
            svg {
                fill: none;
                stroke: var(--s);
                stroke-width: 2px;
                stroke-linecap: round;
                stroke-linejoin: round;
                transition: stroke .4s;
                &.eye {
                    --s: var(--e, var(--normal-eye));
                    --t: 17px;
                    --w: 7px;
                    --h: 4px;
                    &.right {
                        --l: 23px;
                    }
                }
                &.mouth {
                    --s: var(--m, var(--normal-mouth));
                    --l: 11px;
                    --t: 23px;
                    --w: 18px;
                    --h: 7px;
                }
            }
            &:before,
            &:after {
                content: '';
                z-index: var(--zi, 1);
                border-radius: var(--br, 1px);
                background: var(--b, var(--e, var(--normal-eye)));
                transition: background .4s;
            }
        }
        &.angry {
            --step-1-rx: -24deg;
            --step-1-ry: 20deg;
            --step-2-rx: -24deg;
            --step-2-ry: -20deg;
            div {
                &:before {
                    --r: 20deg;
                    --w: 50px;
                    --h: 8px;
                    --t: 40px;
                    --l: 30px;
                }
                &:after {
                    --l: 99px;
                    --r: -20deg;
                    --w: 50px;
                    --h: 8px;
                    --t: 40px;
                }
                svg {
                    &.eye {
                        stroke-dasharray: 4.55;
                        stroke-dashoffset: 8.15;
                    }
                }
            }
            &.active {
                animation: angry 1s linear;
                div {
                    &:before {
                        --middle-y: -2px;
                        --middle-r: 22deg;
                        animation: toggle .8s linear forwards;
                    }
                    &:after {
                        --middle-y: 1px;
                        --middle-r: -18deg;
                        animation: toggle .8s linear forwards;
                    }
                }
            }
        }
        &.sad {
            --step-1-rx: 20deg;
            --step-1-ry: -12deg;
            --step-2-rx: -18deg;
            --step-2-ry: 14deg;
            div {
                &:before,
                &:after {
                    --b: var(--active-tear);
                    --sc: 0;
                    --w: 30px;
                    --h: 30px;
                    --t: 73px;
                    --l: 35px;
                    --br: 50%;
                }
                &:after {
                    --l: 112px;
                }
                svg {
                    &.eye {
                        --t: 60px;
                        --br: 50%;
                    }
                    &.mouth {
                        --t: 24px;
                        stroke-dasharray: 9.5;
                        stroke-dashoffset: 33.25;
                    }
                }
            }
            &.active {
                div {
                    &:before,
                    &:after {
                        animation: tear .6s linear forwards;
                    }
                }
            }
        }
        &.ok {
            --step-1-rx: 4deg;
            --step-1-ry: -22deg;
            --step-1-rz: 6deg;
            --step-2-rx: 4deg;
            --step-2-ry: 22deg;
            --step-2-rz: -6deg;
            div {
                &:before {
                    --l: 45px;
                    --t: 65px;
                    --h: 30px;
                    --w: 30px;
                    --br: 50%;
                    box-shadow: 60px 0 0 var(--e, var(--normal-eye));
                }
                &:after {
                    --l: 53px;
                    --t: 122px;
                    --w: 73px;
                    --h: 5px;
                    --br: 1px;
                    --b: var(--m, var(--normal-mouth));
                }
            }
            &.active {
                div {
                    &:before {
                        --middle-s-y: .45;
                        animation: toggle .2s linear forwards;
                    }
                    &:after {
                        --middle-s-x: .5;
                        animation: toggle .7s linear forwards;
                    }
                }
            }
        }
        &.good {
            --step-1-rx: -14deg;
            --step-1-rz: 10deg;
            --step-2-rx: 10deg;
            --step-2-rz: -8deg;
            div {
                &:before {
                    --b: var(--m, var(--normal-mouth));
                    --w: 20px;
                    --h: 20px;
                    --br: 50%;
                    --t: 108px;
                    --l: 46px;
                    opacity: .5;
                    box-shadow: 68px 0 0 var(--b);
                    filter: blur(2px);
                }
                &:after {
                    --sc: 0;
                }
                svg {
                    &.eye {
                        --t: 15px;
                        --sc: -1;
                        stroke-dasharray: 4.55;
                        stroke-dashoffset: 8.15;
                    }
                    &.mouth {
                        --t: 22px;
                        --sc: -1;
                        stroke-dasharray: 13.3;
                        stroke-dashoffset: 23.75;
                    }
                }
            }
            &.active {
                div {
                    svg {
                        &.mouth {
                            --middle-y: 1px;
                            --middle-s: -1;
                            animation: toggle .8s linear forwards;
                        }
                    }
                }
            }
        }
        &.happy {
    div {
        /* Existing styles */

        --w-mouth: 70px; /* New variable for mouth width */
        --h-mouth: 42px; /* New variable for mouth height */
        --t-mouth: 100px; /* New variable for mouth top position */
        --br-mouth: 0 0 36px 36px; /* New variable for mouth border radius */

        &:before {
            --sc: 0;
        }
        &:after {
            --b: var(--m, var(--normal-mouth));
            --l: 55px;
            --t: var(--t-mouth); /* Use the variable for top position */
            --w: var(--w-mouth); /* Use the variable for width */
            --h: var(--h-mouth); /* Use the variable for height */
            --br: var(--br-mouth); /* Use the variable for border radius */
        }
        svg {
            &.eye {
                --t: 14px;
                --sc: -1;
            }
        }
    }
    &.active {
        div {
            &:after {
                --middle-s-x: .95;
                --middle-s-y: .75;
                animation: toggle .8s linear forwards;
            }
        }
    }
}
        &:not(.active) {
            cursor: pointer;
            &:active {
                transform: scale(.925);
            }
        }
        &.active {
            --sb: var(--active);
            --sh: var(--active-shadow);
            --m: var(--active-mouth);
            --e: var(--active-eye);
            div {
                animation: shake .8s linear forwards;
            }
        }
    }
}

@keyframes shake {
    30% {
        transform: perspective(240px) rotateX(var(--step-1-rx, 0deg)) rotateY(var(--step-1-ry, 0deg)) rotateZ(var(--step-1-rz, 0deg)) translateZ(10px);
    }
    60% {
        transform: perspective(240px) rotateX(var(--step-2-rx, 0deg)) rotateY(var(--step-2-ry, 0deg)) rotateZ(var(--step-2-rz, 0deg)) translateZ(10px);
    }
    100% {
        transform: perspective(240px) translateZ(4px);
    }
}

@keyframes tear {
    0% {
        opacity: 0;
        transform: translateY(-2px) scale(0) translateZ(0);
    }
    50% {
        transform: translateY(12px) scale(.6, 1.2) translateZ(0);
    }
    20%,
    80% {
        opacity: 1;
    }
    100% {
        opacity: 0;
        transform: translateY(24px) translateX(4px) rotateZ(-30deg) scale(.7, 1.1) translateZ(0);
    }
}

@keyframes toggle {
    50% {
        transform: translateY(var(--middle-y, 0)) scale(var(--middle-s-x, var(--middle-s, 1)), var(--middle-s-y, var(--middle-s, 1))) rotate(var(--middle-r, 0deg));
    }
}

@keyframes angry {
    40% {
        background: var(--active);
    }
    45% {
        box-shadow: inset 3px -3px 4px var(--active-shadow), inset 0 8px 10px var(--active-shadow-angry);
    }
}



.feedback li div svg.eye.left {
    width: 60px;
    height: 60px;
    top: 40px;
    left: 24px;
}
.feedback li div svg.eye.right {
    width: 60px;
    height: 60px;
    top: 40px;
    left: 94px;
}
.feedback li div svg.mouth {
   width: 100px;
   height: 100px;
   left: 39px;
   top: 70px;
}

/* Optional: Increase the size of the entire face container */
.feedback li div {
    width: 180px; /* Adjust the width of the face container */
    height: 180px; /* Adjust the height of the face container */
}
.content {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 50vh; /* Ensure the content covers the full viewport height */
}




</style>