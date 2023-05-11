<?php
session_start();
$_SESSION['csrf_token'] = md5(uniqid(mt_rand(), true));
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);

    echo '<div id="popup-message" style="position: fixed;z-index: 9999999;height: 100vh;width: 100vw;top: 0;left: 0;right: 0;bottom: 0;background: rgb(0 0 0 / 70%);display: flex;flex-direction: column;justify-content: center;align-items: center;">
    <p style="background-color: #4C8AB3;padding: 70px;color: #fff;border-radius: 20px;max-width: 370px;max-height: 300px;text-align: center;">' .
        $message .
        '</p></div>';
    echo '<script>
          setTimeout(function() {
            var popup = document.getElementById("popup-message");
            popup.style.display = "none";
          }, 5000);
        </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title>Starter</title>

    <link rel="stylesheet" href="./style.css" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
  </head>
  <body>
    <header>
      <div class="header-wrapper">
        <a class="brand" href="/">
          <img src="./images/leikur-logo.svg" alt="Leikur Logo" />
          <p class="hidden-logo-text">Leikur A banking service</p>
        </a>
        <nav class="nav-container">
          <div class="nav-links-desktop">
            <a href="#three">Accounts</a>
            <a href="#five">Wallets</a>
            <a href="#six">About</a>
            <a href="#seven">Contact</a>
          </div>

          <ul class="nav-links-burger">
            <li>
              <a
                href="https://account.connectpay.com/"
                target="_blank"
                class="open-account"
              >
                Open Account
              </a>
            </li>
            <li>
              <a
                href="https://account.connectpay.com/"
                target="_blank"
                class="login"
              >
                Log in
              </a>
            </li>
            <li>
              <a href="#three">Accounts</a>
            </li>
            <li>
              <a href="#five">Wallets</a>
            </li>
            <li>
              <a href="#six">About</a>
            </li>
            <li>
              <a href="#seven">Contact</a>
            </li>
          </ul>
          <div class="burger-wrapper-icon">
            <div class="burger">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
            </div>
          </div>
        </nav>
        <div class="header-buttons">
          <a href="https://account.connectpay.com/" target="_blank">
            Open Account
          </a>
          <a href="https://account.connectpay.com/" target="_blank">Log in</a>
        </div>
      </div>
    </header>

    <main>
      <section id="one">
        <div class="section-wrapper">
          <h1>
            A corporate banking service for global internet and game-tech
            industries.
            <br />
            Finally.
          </h1>
        </div>
        <div class="bottom-svg"></div>
      </section>
      <section id="two">
        <div class="section-wrapper">
          <h2>A tailor-made banking service</h2>
          <div class="three-elements">
            <div>
              <img
                src="./images/for-an-industry-on-the-move-symbol.svg"
                alt=""
              />
              <h3>For an industry on the move</h3>
              <p>
                Addressing a global online industry increasingly in need of
                innovative, customised banking solutions.
              </p>
            </div>
            <div>
              <img
                src="./images/for-an-industry-on-the-move-symbol-2.svg"
                alt=""
              />
              <h3>By experts, for experts</h3>
              <p>
                Developed by financial experts and leading industry experts,
                specifically for the global Internet and game-tech industries.
              </p>
            </div>
            <div>
              <img
                src="./images/for-an-industry-on-the-move-symbol-3.svg"
                alt=""
              />
              <h3>Built for purpose</h3>
              <p>
                Enhance your offering and branding with a state-of-the-art
                banking service, comprising accounts, corporate card issuing &
                acquiring, wallets, and more.
              </p>
            </div>
            <a
              href="https://account.connectpay.com/"
              target="_blank"
              class="open-account"
            >
              Open Account
            </a>
          </div>
        </div>
      </section>
      <section id="three">
        <div class="top-svg"></div>
        <div class="section-wrapper">
          <h2>
            Leikur Accounts - International transactions, without hidden fees
          </h2>
          <div class="image-and-text">
            <div class="laptop">
              <img src="./images/lap-top.svg" alt="Lap top computer" />
            </div>
            <div class="take-control">
              <p>
                Take control of your company's finances and administration with
                a Leikur business account. Tailor-made features, an intuitive
                interface and smart solution that helps your business grow.
                Manage SEPA and/or SWIFT transactions, for all your cross-border
                payments.
              </p>
              <img src="./images/sepa-swift-logo.svg" alt="Lap top computer" />
            </div>
          </div>
        </div>
        <div class="bottom-svg"></div>
      </section>
      <section id="four">
        <div class="section-wrapper">
          <ul>
            <li>
              <img src="./images/list-icon-1.svg" alt="" />
              <p>Multiple accounts - easily managed</p>
            </li>
            <li>
              <img src="./images/list-icon-2.svg" alt="" />
              <p>
                Hassle-fre, smooth international payments with SEPA and SWIFT
              </p>
            </li>
            <li>
              <img src="./images/list-icon-3.svg" alt="" />
              <p>Free transfer between all your Leikur accounts</p>
            </li>
            <li>
              <img src="./images/list-icon-4.svg" alt="" />
              <p>
                The best exchange rates possible for cross-border transactions,
                with 20+ currencies available
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section id="five">
        <div class="top-svg"></div>
        <div class="section-wrapper">
          <div class="leikur-wallet-text">
            <h2>Leikur Wallets - Your most valued financial tool</h2>
            <p>
              A wallet that gives its users the freedom and flexibility they
              need for all their purchases, contactless in-store payments and
              cash withdrawals - and full control over spending.
            </p>
            <ul>
              <li>
                <img src="./images/icon-wallet.svg" alt="" />
                <p>Easy to use, intiutive interface and beautiful design</p>
              </li>
              <li>
                <img src="./images/icon-wallet-2.svg" alt="" />
                <p>Manage all your purchases and transactions on the go</p>
              </li>
            </ul>
          </div>
          <div class="leikur-wallet-img">
            <img src="./images/mobile-wallet.svg" alt="" />
          </div>
        </div>
        <div class="bottom-svg"></div>
      </section>
      <section id="five-six">
        <div class="top-svg"></div>
        <div class="section-wrapper">
          <a
            href="https://account.connectpay.com/"
            target="_blank"
            class="open-account"
          >
            Open Account
          </a>
          <h2>Leikur – Who we are</h2>
          <p>
            Leikur was created to address the needs of an industry in motion.
            With traditional banks constantly changing and tightening their
            requirements, and with harmonised international and national
            regulations impacting online gaming operators, we sought to provide
            a corporate banking service that adresses the specific, essential
            ambitions and needs of the innovative gaming industry.
          </p>
        </div>
      </section>
      <section id="six">
        <div class="top-svg"></div>
        <div class="section-wrapper">
          <h2>Enter Leikur.</h2>
          <p>
            The founders of Leikur have extensive, decades-long experience and
            know-how as innovators in the financial industry and leading-edge
            experience from the global internet, game-tech and affiliate
            marketing sectors.
          </p>
          <p>
            The Leikur team combines state-of-the art technology, banking,
            strategy & marketing experience and knowledge. Together we provide a
            corporate banking service tailor-made for your purposes.
          </p>
          <h2>Finally.</h2>
        </div>
        <div class="bottom-svg"></div>
      </section>
      <section id="seven">
        <div class="section-wrapper">
          <h2>Connect with Us</h2>
          <p>
            Send us a message and one of our team members will be in touch soon.
          </p>
          <form id="contact-form" method="POST" action="contact.php">
            <div class="inputs">
              <input
                type="text"
                name="firstname"
                id="firstname"
                placeholder="First name:"
                required
                pattern="[a-zA-Z ]+"
              />
              <input
                type="text"
                name="lastname"
                id="lastname"
                placeholder="Last name:"
                required
                pattern="[a-zA-Z ]+"
              />
              <input
                type="text"
                name="company"
                id="company"
                placeholder="Company:"
                required
                pattern="[a-zA-Z ]+"
              />
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Email:"
                required
              />
            </div>
            <div class="textarea-and-button">
              <textarea
                name="message"
                id="message"
                rows="5"
                cols="33"
                placeholder="Message:"
                required
              ></textarea>
              <button type="submit">Send</button>
            </div>
            <input
              type="hidden"
              name="csrf_token"
              value="<?php echo $_SESSION['csrf_token']; ?>"
            />
          </form>
        </div>
      </section>
    </main>
    <footer>
      <div class="footer-top">
        <div class="footer-column-one">
          <img src="./images/leikur-logo-white.svg" alt="Leikur Logo" />
        </div>
        <div class="footer-column-two"><p>Leikur</p></div>
        <div class="footer-column-three"><p>Legal</p></div>
        <div><p>Follow</p></div>
      </div>
      <div class="footer-bottom">
        <div class="footer-column-one">
          <p><small>© Copyright Leikur Ltd. 2023</small></p>
          <p>
            <small>
              <strong>Leikur UAB</strong>
              , Gedimino pr. 20, Vilnius, Lithuania
            </small>
          </p>
        </div>
        <div class="footer-column-two">
          <ul>
            <li>
              <a href="#three">Accounts</a>
            </li>
            <li>
              <a href="#five">Wallets</a>
            </li>
            <li>
              <a href="#six">About</a>
            </li>
            <li>
              <a href="#seven">Contact</a>
            </li>
          </ul>
        </div>
        <div class="footer-column-three">
          <ul>
            <li>Terms & Conditions</li>
            <li>Cookie Policy</li>
            <li>GDPR & Privacy Policy</li>
          </ul>
        </div>
        <div>
          <ul>
            <li>
              <a
                href="https://www.linkedin.com/company/leikurfinance/about/"
                target="_blank"
              >
                LinkedIn
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-mobile">
        <img src="./images/leikur-logo-white.svg" alt="Leikur Logo" />
        <ul>
          <li>
            <p>Leikur</p>
          </li>
          <li>
            <a href="#three">Accounts</a>
          </li>
          <li>
            <a href="#five">Wallets</a>
          </li>
          <li>
            <a href="#six">About</a>
          </li>
          <li>
            <a href="#seven">Contact</a>
          </li>
        </ul>
        <ul>
          <li>
            <p>Legal</p>
          </li>
          <li>Terms & Conditions</li>
          <li>Cookie Policy</li>
          <li>GDPR & Privacy Policy</li>
        </ul>
        <ul>
          <li>
            <p>Follow</p>
          </li>
          <li>
            <a
              href="https://www.linkedin.com/company/leikurfinance/about/"
              target="_blank"
            >
              LinkedIn
            </a>
          </li>
        </ul>
        <div>
          <p><small>© Copyright Leikur Ltd. 2023</small></p>
          <p><small><strong>Leikur UAB</strong></small></p>
          <p><small>Gedimino pr. 20</small></p>
          <p><small>Vilnius, Lithuania</small></p>
        </div>
      </div>
    </footer>
  </body>
  <script src="js/nav.js"></script>
</html>
