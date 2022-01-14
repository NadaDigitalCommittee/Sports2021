$.getJSON("../scripts/points.json")
  .done(function (json) {
    console.log(json.pointslist);

    $(document).ready(function () {
      var outs = 0;
      var onesum = 0;
      var twosum = 0;
      var threesum = 0;
      var foursum = 0;
      $(".outputs").each(function () {
        $(this).text(json.pointslist[outs]);
        if (outs % 4 == 0) {
          if (json.pointslist[outs] != null) {
            onesum += Number(json.pointslist[outs]);
          }
        } else if (outs % 4 == 1) {
          if (json.pointslist[outs] != null) {
            twosum += Number(json.pointslist[outs]);
          }
        } else if (outs % 4 == 2) {
          if (json.pointslist[outs] != null) {
            threesum += Number(json.pointslist[outs]);
          }
        } else if (outs % 4 == 3) {
          if (json.pointslist[outs] != null) {
            foursum += Number(json.pointslist[outs]);
          }
        }
        outs += 1;
      });
      var outss = 0;
      $(".outgrade").each(function () {
        $(this).text(json.grade[outss]);
        outss += 1;
      });
      $(".ones").text(onesum + '点');
      $(".twos").text(twosum + '点');
      $(".threes").text(threesum + '点');
      $(".fours").text(foursum + '点');
      if (json.visible == 1) {
        $(".tensu").each(function () {
          $(this).text("？点");
        });
      }
    });
  });