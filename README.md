## MMC5277 Assignment 5 | Contact Forms
### Created by: Connie Standish
### Date: 12/05/2020

---
### Notes
In index.html make sure the method attribute in the form tag says POST.

```<form class="contactform" id="test_form" name="test_form" method="POST" action="form.php" onsubmit="return validateForm(this)">```

In styles.css make sure the body tag has a background image, it should look like this:

```body { background-image: url('../images/pawprint-small.png'); } ```

However, in the php forms make sure the body tag looks like this:

```body { background-image: url('images/pawprint-small.png'); } ```

To apply icons to the php forms copy and paste `<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384
vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">`
  to the top of each page before the style tag:

If styling does not come out right in the php forms when testing it out on remote host apply classes to the header and main tags.
