<div align="center">

# han.gl clicks to SVG api

<p align="center">
  <img src="./img/logo.png" width="200"/>
</p>

By_0w0i0n0g0

<br>
<br>

## Table of Contents

[Notification](#notification)

[Installation](#installation)

[Usage](#usage)

[Caution](#caution)

[Etc](#etc)

</div>

<br>
<br>

## Notification

- This API returns the click count state of the link shortener called "han.gl" in the form of SVG.

<br>

- The codes of this repos follow the No License. The code cannot be modified and used for commercial purposes without the copyright holder's permission. For more information, visit https://choosealicense.com/no-permission/.

<br>
<br>

## Installation

---

1. Go to the site where you check the statistics by attaching + to the shortcut link that you made with han.gl.
    - ex) If you created https://han.gl/xt1zo, then the statistics link is https://han.gl/xt1zo+.


<p align="center">
  <img src="./img/1.png" width="300"/>
</p>

---

2. press F12 to open developer tool, and go to network tab to find the JS file.
- The format of this file is like 
  - MjQ2NjM6MjM?token=9a064460dbde6319169393fad9a9e780

<p align="center">
  <img src="./img/2.png" width="300"/>
</p>

---

3. click "open in new tab" and copy the js file link.
- The format of this link is like 
  - https://han.gl/analytic/MjQ2NjM6MjM?token=9a064460dbde6319169393fad9a9e780

---

4. Hand over the link as a parameter to the demo site provided or the site where the PHP file is working.
- The format of this link is like 
  - https://serverkorea.duckdns.org/?url1=https://han.gl/analytic/OTM0Mzk1OjM4?token=9a064460dbde6319169393fad9a9e780

- Or you can use multiple links (max 3) to get the sum of the clicks like this :
  - https://serverkorea.duckdns.org/?url1=https://han.gl/analytic/OTM0Mzk1OjM4?token=9a064460dbde6319169393fad9a9e780&url2=https://han.gl/analytic/OTkwMjM0OjE?token=9a064460dbde6319169393fad9a9e780

---

<br>
<br>

## Usage
- You can use it in README.md or other site like this :


ex 1)

```
![SVG](https://serverkorea.duckdns.org/?url1=https://han.gl/analytic/OTM0Mzk1OjM4?token=9a064460dbde6319169393fad9a9e780&url2=https://han.gl/analytic/OTkwMjM0OjE?token=9a064460dbde6319169393fad9a9e780)
```

![SVG](https://serverkorea.duckdns.org/?url1=https://han.gl/analytic/OTM0Mzk1OjM4?token=9a064460dbde6319169393fad9a9e780&url2=https://han.gl/analytic/OTkwMjM0OjE?token=9a064460dbde6319169393fad9a9e780)


ex 2)

```
<p align="center">
<img src="https://serverkorea.duckdns.org/?url1=https://han.gl/analytic/OTM0Mzk1OjM4?token=9a064460dbde6319169393fad9a9e780&url2=https://han.gl/analytic/OTkwMjM0OjE?token=9a064460dbde6319169393fad9a9e780"/>
</p>
```


<p align="center">
<img src="https://serverkorea.duckdns.org/?url1=https://han.gl/analytic/OTM0Mzk1OjM4?token=9a064460dbde6319169393fad9a9e780&url2=https://han.gl/analytic/OTkwMjM0OjE?token=9a064460dbde6319169393fad9a9e780"/>
</p>


<br>
<br>

## Caution

- This api is created for the convenience of service users, without any interaction with han.gl.

<br>
<br>

## Etc

### Roadmap

- [X] Run the demo server.
- [X] Supports for multiple links.

<br>

### Version

- v.0
  - Only one link is supported.
  - Can't use it in GitHub README.md because JavaScript is used.

- v.1
  - Multiple links are supported.
  - You can use it in GitHub README.md because now, it is returning the pure svg.