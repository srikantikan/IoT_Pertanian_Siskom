// sikat.js

// gauge kelembaban udara

const gauge2Element = document.querySelector(".gauge2");

function setGauge2Value(gauge, value) {
  if (value < 0 || value > 1) {
    return;
  }

  gauge.querySelector(".gauge__fill2").style.transform = `rotate(${
    value / 2
  }turn)`;
  gauge.querySelector(".gauge__cover2").textContent = `${Math.round(
    value * 100
  )}%`;
}

setGauge2Value(gauge2Element, 0.65);

// Contoh update nilai kelembaban tanah
const gaugeElement = document.querySelector(".gauge");

function setGaugeValue(gauge, value) {
  if (value < 0 || value > 1) {
    return;
  }

  gauge.querySelector(".gauge__fill").style.transform = `rotate(${
    value / 2
  }turn)`;
  gauge.querySelector(".gauge__cover").textContent = `${Math.round(
    value * 100
  )}%`;
}

setGaugeValue(gaugeElement, 0.59);
