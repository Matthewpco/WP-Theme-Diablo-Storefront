import { LitElement, html, css } from "/wp-content/themes/diablo-4-storefront-child/assets/js/lit-core.min.js";
// Web Component built using Lit for maximum compatibility.
// Class tree with functional dropdown content and switched images on click
export class d4sClasses extends LitElement {
  static properties = {
    name: {},
    description: {},
    image: {},
    video: {},
    icon: {},
  };
  // Styles are scoped to this element: they won't conflict with styles
  // on the main page or in other components. Styling API can be exposed
  // via CSS custom properties.
  static styles = css`
    :host {
      display: flex;
      padding: 1% 7% 1% 7%;
      flex-wrap: wrap;
    }

    .one-third-section {
      width: 30%;
    }

    .color-brown {
    color: #aa9480;
    }
    
    .color-gray {
    color: #878582;
    }
    
    .color-dark-gray {
    color: #b0afac;
    }

    .two-thirds-section {
      width: 70%;
    }

    .row {
      display: flex;
      align-items: center;
      cursor: pointer;
    }

    .row img {
        opacity: .8;
        transition: .4s;
    }

    .row img:hover {
        opacity: 1;
    }

    .row h3:hover {
        color: #fff;
    }

    .row h3 {
        padding-left: 5%;
        transition: .4s;
        font-family: 'Exocet Blizzard';
        font-size: 1.5rem;
    }

    p {
        font-family: 'Alegreya Sans';
        font-size: 1.3rem;
    }

    .hidden {
        display: none;
    }

    .wc-img {
        background-size: auto 100%;
        background-position: center center;
        width: 140%;
        margin-left: -30%;
    }

    /* Mobile media queries */
    @media only screen and (max-width: 767px) {
        video, iframe {

            width: 300px;
            height: 198px;

        }
        .row {
            flex-wrap: wrap;
        }

        .one-third-section {
            flex-direction: column;
            width: 100%

        }

        .two-thirds-section {
            display: none;
        }

        #mob-img-1,#mob-img-2,#mob-img-3,#mob-img-4,#mob-img-5 {
            display: flex;
        }
        .wc-img {
            margin: -40% 0 -30% 0;
            width: 100%;
        }
    }
  `;

  constructor() {
    super();
    // Define reactive properties--updating a reactive property causes
    // the component to update.
    this.name = "Barbarian";
    this.description =
      "The Barbarian has unparalleled strength and expertly wields an entire arsenal in battle, with a weapon for every occasion.";
    this.image =
      "h/wp-content/uploads/2023/01/d4-class-bg-parallax-mobile-barbarian-001.webp";
    this.video =
      "/wp-content/uploads/2023/01/lg-barb.webm";
    this.icon =
      "/wp-content/uploads/2023/01/d4-classes-icon-barbarian-base.webp";
  }

  // The render() method is called any time reactive properties change.
  // Return HTML in a string template literal tagged with the `html`
  // tag function to describe the component's internal DOM.
  // Expressions can set attribute values, property values, event handlers,
  // and child nodes/text.
  render() {
    return html`
        <div class="one-third-section">

            <div class="row" id="dropdown-toggle-1" @click=${this.showBarbarian} style="z-index: 2">
                <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-classes-icon-barbarian-base.webp" width="40px" height="40px" />
                <h3 class="color-dark-gray">BARBARIAN</h3> 
            </div>
            <div id="dropdown-content-1" class="">
            <img id="mob-img-1" class="wc-img hidden" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-parallax-mobile-barbarian-001-1.webp"  />
                <p class="color-gray">The Barbarian has unparalleled strength and expertly wields an entire arsenal in battle, with a weapon for every occasion. He bellows intimidating war cries and unleashes ground-shaking slams to send approaching hordes reeling.</p>
                <video width="480" height="270" controls poster="http://garyp38.sg-host.com/wp-content/uploads/2023/01/barb-overlay.webp">
                    <source src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/lg-barb.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="row" id="dropdown-toggle-2" @click=${this.showDruid}>
                <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-classes-icon-druid-base.webp" width="40px" height="40px" />
                <h3 class="color-dark-gray">DRUID</h3>

            </div>
            <div id="dropdown-content-2" class="hidden">
            <img id="mob-img-2" class="wc-img hidden" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-parallax-mobile-druid-001.webp" />
                <p class="color-gray">The Druid is a savage shapeshifter, fluidly transforming between the forms of a towering bear or a vicious werewolf to fight alongside the creatures of the wild. He also commands the power of earth, wind, and storm, unleashing nature’s wrath to devastating effect.</p>
                <video width="480" height="270"  controls poster="http://garyp38.sg-host.com/wp-content/uploads/2023/01/druid-overlay.webp">
                    <source src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/lg-druid.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="row" id="dropdown-toggle-3" @click=${this.showNecromancer}>
                <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-classes-icon-necromancer-base.webp" width="40px" height="40px" />
                <h3 class="color-dark-gray">NECROMANCER</h3>
            </div>
            <div id="dropdown-content-3" class="hidden">
            <img id="mob-img-3" class="wc-img hidden" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-parallax-mobile-necromancer-001.webp" />
                <p class="color-gray">Necromancers are cunning summoners that conjure vengeful hordes of the undead. Their Essence flows into three powerful bastions of Bone, Blood, or Shadow to bring low their enemies.</p>
                <video width="480" height="270"   controls poster="http://garyp38.sg-host.com/wp-content/uploads/2023/01/necromancer-overlay.webp">
                    <source src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/D4_Necromancer_Trailer_Video_Asset.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>
            
            <div class="row" id="dropdown-toggle-4" @click=${this.showRogue}>
                <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-classes-icon-rogue-base.webp" width="40px" height="40px" />
                <h3 class="color-dark-gray">ROGUE</h3>
            </div>
            <div id="dropdown-content-4" class="hidden">
            <img id="mob-img-4" class="wc-img hidden" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-parallax-mobile-rogue-001.webp" />
                <p class="color-gray">The Rogue is an adaptable, agile warrior who can specialize in ranged or close quarters combat. She can best any foe with her imbued weapons, perform powerful combo attacks, and can augment her arsenal with deadly poisons and shadow magic to slay demons with impunity.</p>
                <iframe width="480" height="270" src="https://www.youtube.com/embed/LvrLZ4yETHI" title="Diablo IV - Rogue Announce Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <div class="row" id="dropdown-toggle-5" @click=${this.showSorcerer}>
                <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-classes-icon-sorcerer-base.webp" width="40px" height="40px" />
                <h3 class="color-dark-gray">SORCERER</h3>
            </div>
            <div id="dropdown-content-5" class="hidden">
            <img id="mob-img-5" class="wc-img hidden" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-parallax-mobile-sorcerer-001.webp" />
                <p class="color-gray">The Sorceress shapes the elements into whatever form is necessary to ensure victory, from hurling bolts of lightning, impaling her foes upon jagged spikes of ice, and raining flaming meteors down from the sky.</p>
                <video width="480" height="270"  controls poster="http://garyp38.sg-host.com/wp-content/uploads/2023/01/sorcerer-overlay.webp">
                    <source src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/lg-sorc.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>
            
        </div>

        <div  class="two-thirds-section">
            <img id="bg-img-1" class="wc-img" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-parallax-desktop-barbarian-001-scaled.webp"  />
            <img id="bg-img-2" class="wc-img hidden" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-parallax-desktop-druid-001-scaled.webp" />
            <img id="bg-img-3" class="wc-img hidden" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-parallax-desktop-necromancer-001-scaled.webp" />
            <img id="bg-img-4" class="wc-img hidden" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-parallax-desktop-rogue-001-scaled.webp" />
            <img id="bg-img-5" class="wc-img hidden" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-parallax-desktop-sorcerer-001-scaled.webp" />
        </div>

        
    `;
  }

  // Event handlers can update the state of @properties on the element
  // instance, causing it to re-render
  //Barbarian
  get _dropdownContent1() {
    return this.renderRoot.querySelector('#dropdown-content-1');
  }
  get _sectionImg1() {
    return this.renderRoot.querySelector('#bg-img-1');
  }
  //Druid
  get _dropdownContent2() {
    return this.renderRoot.querySelector('#dropdown-content-2');
  }
  get _sectionImg2() {
    return this.renderRoot.querySelector('#bg-img-2');
  }
  //Necromancer
  get _dropdownContent3() {
    return this.renderRoot.querySelector('#dropdown-content-3');
  }
  get _sectionImg3() {
    return this.renderRoot.querySelector('#bg-img-3');
  }
  //Rogue
  get _dropdownContent4() {
    return this.renderRoot.querySelector('#dropdown-content-4');
  }
  get _sectionImg4() {
    return this.renderRoot.querySelector('#bg-img-4');
  }
  //Sorcerer
  get _dropdownContent5() {
    return this.renderRoot.querySelector('#dropdown-content-5');
  }
  get _sectionImg5() {
    return this.renderRoot.querySelector('#bg-img-5');
  }

  //@Click

  showBarbarian() {
    this._dropdownContent1.classList.remove("hidden");
    this._sectionImg1.classList.remove("hidden");

    this._dropdownContent2.classList.add("hidden");
    this._sectionImg2.classList.add("hidden");

    this._dropdownContent3.classList.add("hidden");
    this._sectionImg3.classList.add("hidden");

    this._dropdownContent4.classList.add("hidden");
    this._sectionImg4.classList.add("hidden");

    this._dropdownContent5.classList.add("hidden");
    this._sectionImg5.classList.add("hidden");

  }

  showDruid() {
    this._dropdownContent2.classList.remove("hidden");
    this._sectionImg2.classList.remove("hidden");

    this._dropdownContent1.classList.add("hidden");
    this._sectionImg1.classList.add("hidden");
    
    this._dropdownContent3.classList.add("hidden");
    this._sectionImg3.classList.add("hidden");

    this._dropdownContent4.classList.add("hidden");
    this._sectionImg4.classList.add("hidden");

    this._dropdownContent5.classList.add("hidden");
    this._sectionImg5.classList.add("hidden");
  }

  showNecromancer() {
    this._dropdownContent3.classList.remove("hidden");
    this._sectionImg3.classList.remove("hidden");

    this._dropdownContent1.classList.add("hidden");
    this._sectionImg1.classList.add("hidden");
    
    this._dropdownContent2.classList.add("hidden");
    this._sectionImg2.classList.add("hidden");

    this._dropdownContent4.classList.add("hidden");
    this._sectionImg4.classList.add("hidden");

    this._dropdownContent5.classList.add("hidden");
    this._sectionImg5.classList.add("hidden");
  }

  showRogue() {
    this._dropdownContent4.classList.remove("hidden");
    this._sectionImg4.classList.remove("hidden");

    this._dropdownContent1.classList.add("hidden");
    this._sectionImg1.classList.add("hidden");
    
    this._dropdownContent3.classList.add("hidden");
    this._sectionImg3.classList.add("hidden");

    this._dropdownContent2.classList.add("hidden");
    this._sectionImg2.classList.add("hidden");

    this._dropdownContent5.classList.add("hidden");
    this._sectionImg5.classList.add("hidden");
  }

  showSorcerer() {
    this._dropdownContent5.classList.remove("hidden");
    this._sectionImg5.classList.remove("hidden");

    this._dropdownContent1.classList.add("hidden");
    this._sectionImg1.classList.add("hidden");
    
    this._dropdownContent3.classList.add("hidden");
    this._sectionImg3.classList.add("hidden");

    this._dropdownContent4.classList.add("hidden");
    this._sectionImg4.classList.add("hidden");

    this._dropdownContent2.classList.add("hidden");
    this._sectionImg2.classList.add("hidden");
  }
}

customElements.define("d4s-classes", d4sClasses);