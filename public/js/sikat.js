// sikat.js

// gauge kelembaban udara
const gauge2Element = document.querySelector(".gauge2");

function setGauge2Value(gauge) {
    const coverElement = gauge.querySelector(".gauge__cover2 span");
    const value = parseFloat(coverElement.textContent) / 100;
    if (value < 0 || value > 1) {
        return;
    }

    gauge.querySelector(".gauge__fill2").style.transform = `rotate(${value / 2}turn)`;
}

setGauge2Value(gauge2Element);

// gauge kelembaban tanah
const gaugeElement = document.querySelector(".gauge");

function setGaugeValue(gauge) {
    const coverElement = gauge.querySelector(".gauge__cover span");
    const value = parseFloat(coverElement.textContent) / 100;
    if (value < 0 || value > 1) {
        return;
    }

    gauge.querySelector(".gauge__fill").style.transform = `rotate(${value / 2}turn)`;
}

setGaugeValue(gaugeElement);
