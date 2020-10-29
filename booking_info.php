
<style>
    table
    {
        border:1px solid #BDBDBD;
        text-align:center;
        width:30%;
    }
</style>
<style>
html, body {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.clearfix:after {
  content: '';
  display: block;
  clear: both;
  float: none;
}

/* ======== Calendar ======== */
.my-calendar {
  width: 700px;
  margin: 30px;
  padding: 20px 20px 10px;
  text-align: center;
  font-weight: 800;
  border: 1px solid #ddd;
  cursor: default;
}
.my-calendar .clicked-date {
  border-radius: 25px;
  margin-top: 36px;
  float: left;
  width: 42%;
  padding: 46px 0 26px;
  background: #ddd;
}
.my-calendar .calendar-box {
  float: right;
  width: 58%;
  padding-left: 30px;
}

.clicked-date .cal-day {
  font-size: 24px;
}
.clicked-date .cal-date {
  font-size: 130px;
}

.ctr-box {
  padding: 0 16px;
  margin-bottom: 20px;
  font-size: 20px;
}
.ctr-box .btn-cal {
  position: relative;
  float: left;
  width: 25px;
  height: 25px;
  margin-top: 5px;
  font-size: 16px;
  cursor: pointer;
  border: none;
  background: none;
}
.ctr-box .btn-cal:after {
  content: '<';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  line-height: 25px;
  font-weight: bold;
  font-size: 20px;
}
.ctr-box .btn-cal.next {
  float: right;
}
.ctr-box .btn-cal.next:after {
  content: '>';
}

.cal-table {
  width: 100%;
}
.cal-table th {
  width: 14.2857%;
  padding-bottom: 5px;
  font-size: 16px;
  font-weight: 900;
}
.cal-table td {
  padding: 3px 0;
  height: 50px;
  font-size: 15px;
  vertical-align: middle;
}
.cal-table td.day {
  position: relative;
  cursor: pointer;
}
.cal-table td.today {
  background: #ffd255;
  border-radius: 50%;
  color: #fff;
}
.cal-table td.day-active {
  background: #ff8585;
  border-radius: 50%;
  color: #fff;
}
.cal-table td.has-event:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 4px;
  background: #FFC107;
}</style>
<script>
      $( document ).ready( function() {


        $( '.dot_list' ).click( function() {

        } );
      } );

    </script>
    <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb" style="    background-color: #e9ecef30;">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Link</li>
                        <li class="breadcrumb-item active">Link</li>
                    </ul>
                </div>
            </div>
<div class="sub_title" style="
    margin-bottom: 100px;
">
			<h3 class="tit" style="text-align: center; "><span style="font-size: 36pt; font-family: Verdana;">상담 신청</span></h3>
		</div>
<div class="intro" style="
    border: 1px solid #ddd;
    padding: 10px;
    word-break: keep-all;
    text-align: left;
">
    <ul class="dot_list" style="
    /* border: 1px solid #ddd; */
    /* padding: 10px; */
    /* word-break: keep-all; */
    /* text-align: left; */
    background-color: yellow;
">
      <li style="color:#eb7588">예약안내</li>
      <li style="color:#eb7588">예약안내</li>
      <li>예약안내예약안내예약안내</li>
      <li>예약안내예약안내예약안내</li>
      <li>예약안내예약안내예약안내</li>
    </ul>
  </div>
  <div class = "booking_step1"><div><div><div> </div> </div>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row" style="">
        <div class="mx-auto col-lg-6 col-10">

          <form class="text-left" method="post" action="/bbs/group.php?gr_id=booking_submit">
            
            <div class="form-group"> <label for="name">이름</label> <input type="text" class="form-control" id="form17" p> </div>
            <div class="form-group"> <label for="phone">전화번호<br></label> <input type="text" class="form-control" id="form17" > </div>
            <div class="form-group"> <label for="birth">생년월일<br></label> <input type="email" class="form-control" id="form18" > </div>
            <div class="form-group"> <label for="company">기업<br></label> <input type="text" class="form-control" id="form16" > </div>
            <div class="form-group"> <label for="company">성별<br></label> <input type="text" class="form-control" id="form16" > </div>
            <div class="form-group">
             
              <div class="form-check"> <input class="form-check-input" type="checkbox" id="form21" value="on"> <label class="form-check-label" for="form21"> I Agree with <a href="#">Term and Conditions</a> of the service </label> </div>
            </div> <button type="submit" class="btn btn-primary" style="    width : 100%; background-color: #5379cb;">신청</button>
          </form>
        </div>
      </div>
    </div>
  </div>
