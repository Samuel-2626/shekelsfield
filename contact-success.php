{% extends "base.html" %}

{% block title %}Message Sent | {% endblock title %}

{% block description %}Thank's for reaching out{% endblock description %}
{% block keywords %}message, sent, success{% endblock keywords %}

{% block og %}Thank's for reaching out{% endblock og %}

  {% block heading %}Message Sent{% endblock heading %}
  {% block content %}
  <br>
  <h3>Thank's for reaching out <em style="color: grey;">{{ name }}</em>.</h3>
  <p>
     Your Message has been sent successfully
  </p>
  
  <br>
  <a href="/"><button class="btn btn-outline-success">Back to home</button></a>
  {% endblock content %}
  
