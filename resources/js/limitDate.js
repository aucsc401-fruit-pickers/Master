    var today = new Date().toISOString().split('T')[0];
    var maxDate = new Date();
    maxDate.setDate((maxDate.getDate()) + 30);

    maxDate = maxDate.toISOString().split('T')[0];

    document.getElementsByName("removeRequestDate")[0].setAttribute('min', today);
    document.getElementsByName("removeRequestDate")[0].setAttribute('max', maxDate);


