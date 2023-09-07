<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./index.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@700&display=swap" />
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<style>
    .divider-vertical-icon,
.sidenav-bg {
  position: absolute;
  height: 100%;
  top: 0;
  bottom: 0;
}
.sidenav-bg {
  width: 100%;
  right: 0;
  left: 0;
  background-color: #353945;
}
.divider-vertical-icon {
  right: -1.03px;
  max-height: 100%;
  width: 2px;
}
.border {
  background-color: var(--color-mediumslateblue);
  width: 2px;
  height: 24px;
  display: none;
}
.account,
.border,
.icon {
  position: relative;
}
.icon {
  width: 16px;
  height: 16px;
}
.account {
  font-weight: 600;
  display: inline-block;
  width: 126px;
  flex-shrink: 0;
  opacity: 0.8;
}
.icon-text {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  gap: var(--gap-xl);
}
.icon-left {
  width: 12px;
  height: 12px;
  display: none;
}
.badge,
.icon-left,
.icon-right {
  position: relative;
}
.icon-right {
  width: 16px;
  height: 16px;
  display: none;
}
.elements {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  gap: var(--gap-7xs);
}
.badgebase,
.x-badge {
  flex-direction: column;
  justify-content: flex-start;
}
.badgebase {
  border-radius: var(--br-81xl);
  background-color: var(--color-lavender);
  display: flex;
  padding: var(--padding-11xs) var(--padding-3xs);
  align-items: center;
}
.x-badge {
  display: none;
  align-items: flex-start;
  font-size: var(--font-size-xs);
  color: var(--color-mediumslateblue);
}
.content {
  padding: var(--padding-base) var(--padding-5xl);
  gap: var(--gap-3xs);
}
.content,
.nav-itemdefault {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
}
.image-icon,
.nav-user {
  position: absolute;
  left: 0;
}
.nav-user {
  bottom: 20px;
  display: none;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
}
.image-icon {
  height: 100%;
  width: 100%;
  top: 0;
  right: 0;
  bottom: 0;
  border-radius: var(--br-81xl);
  max-width: 100%;
  overflow: hidden;
  max-height: 100%;
  object-fit: cover;
}
.indicator {
  height: 31.51%;
  width: 31.51%;
  top: -1.91%;
  right: -1.91%;
  bottom: 70.4%;
  left: 70.4%;
  border-radius: 50%;
  background-color: #66cb9f;
  border: 3px solid var(--color-white);
  box-sizing: border-box;
}
.avatarmain,
.indicator,
.mj {
  position: absolute;
}
.mj {
  height: 33.85%;
  width: 72.31%;
  top: 32.31%;
  left: 13.85%;
  display: none;
  align-items: center;
  justify-content: center;
}
.avatarmain {
  height: 100%;
  width: 100%;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border-radius: var(--br-81xl);
  background-color: var(--color-mediumslateblue);
}
.avatarbase {
  position: relative;
  width: 46px;
  height: 46px;
}
.nav-user1 {
  position: absolute;
  top: 821px;
  left: 43px;
  display: none;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  gap: 42px;
  text-align: center;
  font-size: var(--paragraph-lead-size);
}
.badgebase3,
.menu,
.x-badge3 {
  flex-direction: column;
  justify-content: flex-start;
}
.badgebase3 {
  border-radius: var(--br-81xl);
  background-color: #ffe6e4;
  display: flex;
  padding: var(--padding-11xs) var(--padding-3xs);
  align-items: center;
}
.menu,
.x-badge3 {
  align-items: flex-start;
}
.x-badge3 {
  display: flex;
  font-size: var(--font-size-xs);
  color: #f16063;
}
.menu {
  position: absolute;
  top: 411px;
  left: 0;
  width: 250px;
  display: none;
}
.divider-horizontal-icon {
  position: absolute;
  top: 387px;
  left: 20px;
  width: 210px;
  height: 0;
  display: none;
  opacity: 0.1;
}
.border6 {
  position: relative;
  background-color: var(--color-white);
  width: 2px;
  height: 24px;
}
.messages {
  position: relative;
  font-weight: 600;
  display: inline-block;
  width: 126px;
  flex-shrink: 0;
}
.content6,
.x-badge6 {
  display: flex;
  justify-content: flex-start;
}
.x-badge6 {
  flex-direction: column;
  align-items: flex-start;
  font-size: var(--font-size-xs);
}
.content6 {
  flex-direction: row;
  padding: var(--padding-base) 22px;
  align-items: center;
  gap: var(--gap-3xs);
}
.badgebase7,
.menu1,
.x-badge7 {
  flex-direction: column;
  justify-content: flex-start;
}
.badgebase7 {
  border-radius: var(--br-81xl);
  background-color: var(--color-lavender);
  display: none;
  padding: var(--padding-11xs) var(--padding-3xs);
  align-items: center;
}
.menu1,
.x-badge7 {
  align-items: flex-start;
}
.x-badge7 {
  display: flex;
  font-size: var(--font-size-xs);
  color: var(--color-mediumslateblue);
}
.menu1 {
  position: absolute;
  top: 112px;
  left: 0;
  width: 250px;
  display: none;
}
.iconsstarfilled {
  position: relative;
  width: 16px;
  height: 16px;
  overflow: hidden;
  flex-shrink: 0;
}
.label {
  position: relative;
  line-height: 16px;
}
.button {
  position: absolute;
  top: 52px;
  left: 52px;
  border-radius: var(--br-71xl);
  background-color: var(--color-gray-100);
  width: 178px;
  height: 66px;
  display: flex;
  flex-direction: row;
  padding: var(--padding-base) var(--padding-5xl);
  box-sizing: border-box;
  align-items: center;
  justify-content: center;
  gap: var(--gap-xs);
  font-size: var(--text-base-regular-size);
  color: #23262f;
  font-family: var(--headline-3);
}
.welcome-to-virtual,
.well-help-you {
  position: absolute;
  left: 120px;
  display: inline-block;
}
.welcome-to-virtual {
  top: 173px;
  font-size: var(--headline-3-size);
  letter-spacing: -0.01em;
  line-height: 48px;
  font-family: var(--headline-3);
  width: 513px;
  height: 125px;
}
.well-help-you {
  top: 341px;
  font-size: var(--paragraph-lead-size);
  line-height: 30px;
  width: 458px;
}
.login-page-1 {
  position: absolute;
  height: 36.74%;
  width: 66.99%;
  top: 56.53%;
  right: 19.5%;
  bottom: 6.74%;
  left: 13.51%;
  max-width: 100%;
  overflow: hidden;
  max-height: 100%;
  object-fit: cover;
}
.aside {
  position: absolute;
  height: 100%;
  width: 49.86%;
  top: 0;
  right: 50.14%;
  bottom: 0;
  left: 0;
}
.title-,
.title-1 {
  align-self: stretch;
  position: relative;
}
.title- {
  line-height: 136.02%;
  font-weight: 600;
}
.title-1 {
  font-size: var(--text-base-regular-size);
  line-height: 162.02%;
}
.heading {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-xs);
  font-size: var(--headings-h2-size);
  color: var(--color-gray-200);
}
.form-title {
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  font-weight: 500;
  display: flex;
  align-items: center;
}
.form-titledefault,
.input {
  align-self: stretch;
  position: relative;
  height: 17px;
}
.input {
  border: 0;
  font-weight: 500;
  font-family: var(--text-base-regular);
  font-size: var(--font-size-mini);
  background-color: var(--color-aliceblue);
  border-radius: var(--br-7xs);
  height: 46px;
}
.form-help-text1 {
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  line-height: 12px;
  display: flex;
  align-items: center;
}
.form-help-text {
  align-self: stretch;
  position: relative;
  height: 12px;
  display: none;
  font-size: var(--font-size-2xs);
  color: var(--color-slategray-100);
}
.inputlarge {
  gap: var(--gap-5xs);
}
.inputlarge,
.x-form-group {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
}
.form-help-text5 {
  text-decoration: none;
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  line-height: 12px;
  color: inherit;
  display: flex;
  align-items: center;
}
.form-help-text4 {
  align-self: stretch;
  position: relative;
  height: 12px;
  text-align: right;
  font-size: var(--font-size-2xs);
  color: #777e90;
}
.label1 {
  position: relative;
  font-size: var(--text-base-regular-size);
  line-height: 16px;
  font-family: var(--headline-3);
  color: var(--color-gray-100);
  text-align: center;
}
.button1 {
  cursor: pointer;
  border: 0;
  padding: var(--padding-base) var(--padding-5xl);
  background-color: #141416;
  border-radius: var(--br-71xl);
  width: 424px;
  display: flex;
  flex-direction: row;
  box-sizing: border-box;
  align-items: center;
  justify-content: center;
}
.form-logindefault {
  width: 424px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-11xl);
}
.container,
.main {
  height: 882px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.main {
  align-self: stretch;
  padding: 50px 0;
  box-sizing: border-box;
  justify-content: center;
}
.container {
  position: absolute;
  top: 34px;
  left: 743px;
  width: 648px;
  justify-content: flex-start;
  color: var(--color-darkslategray-100);
}
.desktoplog-in {
  position: relative;
  background-color: var(--color-white);
  width: 100%;
  height: 950px;
  overflow: hidden;
  text-align: left;
  font-size: var(--font-size-sm);
  color: var(--color-white);
  font-family: var(--text-base-regular);
}
body {
    margin: 0;
    line-height: normal;
  }
  
  :root {
    /* fonts */
    --headline-3: "DM Sans";
    --text-base-regular: Inter;
  
    /* font sizes */
    --text-base-regular-size: 16px;
    --font-size-2xs: 11px;
    --font-size-mini: 15px;
    --font-size-sm: 14px;
    --headings-h2-size: 28px;
    --paragraph-lead-size: 18px;
    --headline-3-size: 40px;
    --font-size-xs: 12px;
  
    /* Colors */
    --color-white: #fff;
    --color-gray-100: #fcfcfd;
    --color-gray-200: #27272e;
    --color-slategray-100: #718096;
    --color-aliceblue: #edf2f7;
    --color-darkslategray-100: #425466;
    --color-lavender: #e1e8ff;
    --color-mediumslateblue: #4c6fff;
  
    /* Gaps */
    --gap-11xl: 30px;
    --gap-5xs: 8px;
    --gap-xs: 12px;
    --gap-3xs: 10px;
    --gap-7xs: 6px;
    --gap-xl: 20px;
  
    /* Paddings */
    --padding-base: 16px;
    --padding-5xl: 24px;
    --padding-11xs: 2px;
    --padding-3xs: 10px;
  
    /* border radiuses */
    --br-71xl: 90px;
    --br-7xs: 6px;
    --br-81xl: 100px;
  }
  
</style>

<body>
  <div class="desktoplog-in">
    <div class="aside">
      <div class="sidenav-bg"></div>
      <img class="divider-vertical-icon" alt="" src="./public/dividervertical.svg" />

      <div class="nav-user">
        <div class="nav-itemdefault">
          <div class="border"></div>
          <div class="content">
            <div class="icon-text">
              <img class="icon" alt="" src="./public/icon.svg" />

              <div class="account">Account</div>
            </div>
            <div class="x-badge">
              <div class="badgebase">
                <div class="elements">
                  <img class="icon-left" alt="" src="./public/iconleft.svg" />

                  <b class="badge">6</b>
                  <img class="icon-right" alt="" src="./public/iconright.svg" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-itemdefault">
          <div class="border"></div>
          <div class="content">
            <div class="icon-text">
              <img class="icon" alt="" src="./public/icon1.svg" />

              <div class="account">Logout</div>
            </div>
            <div class="x-badge">
              <div class="badgebase">
                <div class="elements">
                  <img class="icon-left" alt="" src="./public/iconleft1.svg" />

                  <b class="badge">6</b>
                  <img class="icon-right" alt="" src="./public/iconright1.svg" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-user1">
        <img class="icon" alt="" src="./public/icon2.svg" />

        <div class="nav-itemdefault">
          <div class="avatarbase">
            <div class="avatarmain">
              <img class="image-icon" alt="" src="./public/image@2x.png" />

              <div class="indicator"></div>
              <b class="mj">MJ</b>
            </div>
          </div>
        </div>
        <img class="icon" alt="" src="./public/icon3.svg" />
      </div>
      <div class="menu">
        <div class="nav-itemdefault">
          <div class="border"></div>
          <div class="content">
            <div class="icon-text">
              <img class="icon" alt="" src="./public/icon4.svg" />

              <div class="account">Settings</div>
            </div>
            <div class="x-badge">
              <div class="badgebase">
                <div class="elements">
                  <img class="icon-left" alt="" src="./public/iconleft2.svg" />

                  <b class="badge">6</b>
                  <img class="icon-right" alt="" src="./public/iconright2.svg" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-itemdefault">
          <div class="border"></div>
          <div class="content">
            <div class="icon-text">
              <img class="icon" alt="" src="./public/icon5.svg" />

              <div class="account">Notifications</div>
            </div>
            <div class="x-badge3">
              <div class="badgebase3">
                <div class="elements">
                  <img class="icon-left" alt="" src="./public/iconleft3.svg" />

                  <b class="badge">23</b>
                  <img class="icon-right" alt="" src="./public/iconright3.svg" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img class="divider-horizontal-icon" alt="" src="./public/dividerhorizontal.svg" />

      <div class="menu1">
        <div class="nav-itemdefault">
          <div class="border"></div>
          <div class="content">
            <div class="icon-text">
              <img class="icon" alt="" src="./public/icon6.svg" />

              <div class="account">Dashboard</div>
            </div>
            <div class="x-badge">
              <div class="badgebase">
                <div class="elements">
                  <img class="icon-left" alt="" src="./public/iconleft4.svg" />

                  <b class="badge">6</b>
                  <img class="icon-right" alt="" src="./public/iconright4.svg" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-itemdefault">
          <div class="border"></div>
          <div class="content">
            <div class="icon-text">
              <img class="icon" alt="" src="./public/icon7.svg" />

              <div class="account">Analytics</div>
            </div>
            <div class="x-badge">
              <div class="badgebase">
                <div class="elements">
                  <img class="icon-left" alt="" src="./public/iconleft5.svg" />

                  <b class="badge">6</b>
                  <img class="icon-right" alt="" src="./public/iconright5.svg" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-itemdefault">
          <div class="nav-itemdefault">
            <div class="border6"></div>
            <div class="content6">
              <div class="icon-text">
                <img class="icon" alt="" src="./public/icon8.svg" />

                <div class="messages">Messages</div>
              </div>
              <div class="x-badge6">
                <div class="badgebase">
                  <div class="elements">
                    <img class="icon-left" alt="" src="./public/iconleft6.svg" />

                    <b class="badge">6</b>
                    <img class="icon-right" alt="" src="./public/iconright6.svg" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-itemdefault">
          <div class="border"></div>
          <div class="content">
            <div class="icon-text">
              <img class="icon" alt="" src="./public/icon9.svg" />

              <div class="account">Collections</div>
            </div>
            <div class="x-badge7">
              <div class="badgebase7">
                <div class="elements">
                  <img class="icon-left" alt="" src="./public/iconleft7.svg" />

                  <b class="badge">6</b>
                  <img class="icon-right" alt="" src="./public/iconright7.svg" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-itemdefault">
          <div class="border"></div>
          <div class="content">
            <div class="icon-text">
              <img class="icon" alt="" src="./public/icon10.svg" />

              <div class="account">Users</div>
            </div>
            <div class="x-badge">
              <div class="badgebase">
                <div class="elements">
                  <img class="icon-left" alt="" src="./public/iconleft8.svg" />

                  <b class="badge">6</b>
                  <img class="icon-right" alt="" src="./public/iconright8.svg" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="button">
        

        <b class="label"><i class="bi bi-star-fill" style="padding-right: 12px;"></i>LOGO</b>
      </div>
      <b class="welcome-to-virtual">Welcome to Virtual Collaboration Environment
      </b>
      <div class="well-help-you">
        We’ll help you improve your professional profile, track your progress,
        and find the courses that match your aspirations. Come and join us,
        you won’t regret it.
      </div>
      <img class="login-page-1" alt="" src="image/login-page-1.png" />
    </div>
    <div class="container">
      <div class="main">
        <div class="form-logindefault">
          <div class="heading">
            <div class="title-">Welcome back!</div>
            <div class="title-1">
              Continue Your Professional Development Progress
            </div>
          </div>
      <form method="post" action="insertpro.php"> >
          <div class="x-form-group">
            <div class="inputlarge">
              <div class="form-titledefault">
                <div class="form-title">Select Account Type</div>
              </div>
              <select name="select" style="padding:15px; width:420px; border-radius:7px;">
                  <option>Student</option>
                  <option>Industry</option>
                </select>

              <div class="form-help-text">
                <div class="form-help-text1">This is a helper text</div>
              </div>
            </div>
          </div>
          <div class="form-logindefault">
            <div class="x-form-group">
              <div class="inputlarge">
                <div class="form-titledefault">
                  <div class="form-title">E-mail or phone number</div>
                </div>
                <input class="input" type="email" name="email" required placeholder="Type your email or phone number" style="padding: 0 10px;"/>

                <div class="form-help-text">
                  <div class="form-help-text1">This is a helper text</div>
                </div>
              </div>
            </div>
            <div class="x-form-group">
              <div class="inputlarge">
                <div class="form-titledefault">
                  <div class="form-title">Password</div>
                </div>
                <input class="input" type="password" name="password" placeholder="Type your password" style="padding: 0 10px;"/>

                <div class="form-help-text4">
                  <a class="form-help-text5" style="justify-content: end; padding-top: 5px;" href="http://google.com">Forget password?</a>
                </div>
              </div>
            </div>
          </div>
          <button class="button1" id="button" name="submit">
            <b class="label1">Sign In</b>
          </button>
        </div>
      </form>  
      </div>
    </div>
  </div>

  <script>
    var button = document.getElementById("button");
    if (button) {
      button.addEventListener("click", function (e) {
        // Please sync "Home-Page" to the project
      });
    }
  </script>
</body>

</html>