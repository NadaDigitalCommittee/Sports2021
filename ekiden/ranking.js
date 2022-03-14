window.onload = function () {
  fetch_ranking();
  setInterval("fetch_ranking()", 30000);
};

function fetch_ranking() {
  fetch(
    "https://script.google.com/macros/s/AKfycbzbQoExNwqPYyFbRsnjasSGqm9FYr9-loOGTIKatW3WYJNm3-7U5PgDpxB_CzVLeHpAIQ/exec"
  )
    .then((res) => {
      return res.json();
    })
    .then((json) => {
      var table_obj = document.getElementById("ranking");
      deleted_objs = table_obj.getElementsByClassName("disposable");
      d_len = deleted_objs.length;
      for (i = d_len - 1; i > -1; i--) {
        deleted_objs[i].remove();
      }
      j_length = json.length;
      for (i = 0; i < j_length; i++) {
        create_row(json, i, table_obj);
      }
      console.log("sucess");
    });
}

function create_row(json, i, table_obj) {
  var rank = i + 1;
  var row_elem = document.createElement("tr");
  row_elem.className = "disposable";

  var rank_elem = document.createElement("td");
  rank_elem.innerHTML = rank;
  rank_elem.className = "rank";

  var team_elem = document.createElement("td");
  team_elem.innerHTML = json[i].team;
  team_elem.className = "team";

  var position_elem = document.createElement("td");
  position_elem.innerHTML = json[i].position;
  position_elem.className = "position";

  var lag_elem = document.createElement("td");
  if (isNaN(parseInt(json[i].length_lag))) {
    lag_elem.innerHTML = json[i].length_lag;
  } else {
    lag_elem.innerHTML = parseInt(json[i].length_lag) + "m";
  }
  lag_elem.className = "lag";

  var time_elem = document.createElement("td");
  time_elem.innerHTML = cut_mt(json[i].time);
  time_elem.className = "time";

  row_elem.appendChild(rank_elem);
  row_elem.appendChild(team_elem);
  row_elem.appendChild(position_elem);
  row_elem.appendChild(time_elem);
  row_elem.appendChild(lag_elem);
  table_obj.appendChild(row_elem);
}

function cut_mt(time_str) {
  var time_list = time_str.split(":");
  if (time_list[1] == undefined) {
    return time_str;
  }
  for (let t = 0; t < 3; t++) {
    if (time_list[t].split("")[1] == undefined) {
      time_list[t] = "0" + time_list[t];
    }
  }
  var time = time_list[0] + ":" + time_list[1] + ":" + time_list[2];
  return time;
}

//+stringでstringを整数型に　　できない場合はNaNとなる。
function lag_calc(lag_data) {
  if (isNaN(+lag_data)) {
    return lag_data;
  } else {
    var lag = +lag_data;
    var ms = lag % 1000;
    var total_second = parseInt((lag - ms) / 1000);
    var second = total_second % 60;
    var minute = parseInt(total_second / 60);
    return minute + "’" + second + "’’";
  }
}
