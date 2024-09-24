<br />
<div align="center">
  <a href="https://github.com/davin-thiemann/fhdw-xss-demo">
    <img src="images/hacker.png" alt="Logo" width="95" height="95">
  </a>

<h3 align="center">Cross-Site-Scripting Demo</h3>

  <p align="center">
    Small XSS Demo in the IT Security and Risk Management Module at FHDW
    <br />
    <a href="https://github.com/davinthiemann/fhdw-xss-demo"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/davinthiemann/fhdw-xss-demo">View Demo</a>
    ·
    <a href="https://github.com/davinthiemann/fhdw-xss-demo/issues/new?labels=bug&template=bug-report---.md">Report Bug</a>
    ·
    <a href="https://github.com/davinthiemann/fhdw-xss-demo/issues/new?labels=enhancement&template=feature-request---.md">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This is a small XSS demo designed to illustrate the use of XSS attacks. It was created as part of the
IT Security and Risk Management module at FHDW Bielefeld. This demo is included in a presentation and a project. 
Please note that it is intended as a basic demonstration. Use it to explore different possibilities for 
exploiting XSS vulnerabilities.


<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

* npm
  ```sh
  npm install npm@latest -g
  ```

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/davinthiemann/fhdw-xss-demo.git
   ```
2. Install NPM packages
   ```sh
   npm install
   ```
3. Start server
   ```sh
   php -S localhost:8000
   ```

<!-- USAGE EXAMPLES -->
## Usage

Once you have started the localhost, you can choose between three XSS examples:

- Persistent XSS 
- Reflected XSS
- DOM-Based XSS

Feel free to experiment with these examples.



```javascript
// Nutzen dieses Skript um zu zeigen das js ausgeführt werden kann
alert('xss');
```

<!-- CONTACT -->
## Contact

Davin Thiemann - davin.thiemann@gmail.com

Project Link: [https://github.com/davinthiemann/fhdw-xss-demo](https://github.com/davinthiemann/fhdw-xss-demo)
