<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    body {
        overflow: hidden;
    }

    * {font-family: 'Pretendard-Medium' !important;}
</style>

<div class="subCon subCon02 scroll_fixed">
    <div class="t_header">
        <h2>DOGLAND GLAMPING</h2>
        <div class="title_line"></div>
        <div class="t_title">
            RESERVATION
            <p>|&nbsp;예약안내&nbsp;|</p>
        </div>
    </div>
    <div class="subCon reserCon01">
        <div class="reser01_01">
            <img src="/images/reser/img01.jpg" class="img_100" alt="">
            <h2>요금<strong>안내</strong></h2>
        </div>
        <dl class="reser_dl">
            <dt>요금<strong>안내</strong></dt>
            <dd>
                <? //include_once ("./include/price.php"); ?>
                <link rel="StyleSheet" href='/css/ddnayo.css' type="text/css" />
                <script type="text/javascript" id="ddnayoapi" src="//www.ddnayo.com/api/script.aspx?apiuser=test" charset="utf-8"></script>
                <div style="width:auto;" id="total_daily_price2"></div>
                <script type="text/javascript">
                    if ($( window ).width() <= 768) {
                        ddnayo.price.dailytable($("#total_daily_price2").get(0), {
                            "id_hotel": "100545"		/* 업소 코드 */
                            , "su_day": "3"		        /* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
                            , "is_room_grp": "true"	/* 객실그룹여부 : 파라미터 생략시 기본 true */
                        });
                    } else {
                        ddnayo.price.dailytable($("#total_daily_price2").get(0), {
                            "id_hotel": "100545"		/* 업소 코드 */
                            , "su_day": "5"		        /* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
                            , "is_room_grp": "true"	/* 객실그룹여부 : 파라미터 생략시 기본 true */
                        });
                    }
                </script>
            </dd>
        </dl>
    </div>
    <div class="subCon reserCon01">
        <div class="reser01_01">
            <img src="/images/reser/img02.jpg" class="img_100" alt="">
            <h2>이용안내&amp;<strong>유의사항</strong></h2>
        </div>
        <dl class="reser_dl">
            <dt>이용안내&amp;<strong>유의사항</strong></dt>
            <dd>
                <dl class="reser_con">
                    <dt>
                        [시설요금]
                    </dt>
                    <dd>
                        <table class="reser_table">
                            <tbody>
                                <tr>
                                    <th>이용시설</th>
                                    <td>시설요금</td>
                                </tr>
                                <tr>
                                    <th>추가인원</th>
                                    <td>
                                        영유아 기준인원 포함 / 최대인원 초과불가<br>
                                        1박기준 1인 20,000원(24개월 이상)<br>
                                        24개월 미만 무료<br>
                                        현장결제
                                    </td>
                                </tr>
                                <tr>
                                    <th>바비큐</th>
                                    <td>숯 + 그릴 : 1SET 20,000원 / 숯 추가 시 5,000원<br>
                                    이용시간 : 입실 ~ 22:00<br>
                                    이용장소 : 각 객실 바로 앞<br>
                                    불멍 : 1회 20,000원 / 장작 1망 추가시 10,000원<br>
                                    현장결제</td>
                                </tr>		
                                <tr>
                                    <th>애견입실</th>
                                    <td>
                                        애견 1마리 무료(단, 12kg 이상 시 추가비용 발생) / 2마리부터 추가 요금 발생<br>
                                        최대입실 가능 마리수 : 3마리<br>
                                        전 객실 입실 가능<br>
                                        1박 기준 1마리 20,000원<br>
                                        12kg 이하 애견만 입실 가능<br>
                                        애견샤워기,애견드라이기 등 애견 전용 용품 완비<br>
                                        현장결제<br>
                                    </td>
                                </tr>									
                            </tbody>
                        </table>
                    </dd>
                    <dd class="txt">
                        - 예약시 환불 기준을 숙지하시고 예약하시기 바랍니다.<br>
                        - 영유아를 포함하여 최대인원을 초과하여 입실은 불가합니다.<br>
                        - 입금시 반드시 예약자명으로 해주시고 이름이 다른 경우 펜션으로 연락을 주셔야 합니다.<br>
                        * 무통장 예약시 가상계좌가 발급됩니다. 시간 내에 입금을 완료 해주셔야 예약이 완료됩니다 *
                    </dd>
                    <dt>[ 예약안내 ]</dt>
                    <dd>
                        <ul class="list01">
                            <li>예약문의 : 010-7525-1269</li>
                            <li>입금계좌 : 신협 351-1152-2037-03 김양선</li>
                        </ul>
                    </dd>

                    <dt>[ 매점 ]</dt>
                    <dd>
                        <ul class="num" id="sp_data08">
                            <li>판매물품 : 숯, 장작, 스낵류, 주류, 음료, 라면, 참기름, 매직파이어, 참치, 햇반, 마시멜로, 아이스크림 등</li>
                            <li>운영시간 : 10:30 ~ 20:30</li>
                        </ul>
                    </dd>
                    <dt>[ 애견수영장 ]</dt>
                    <dd>
                        <ul class="num" id="sp_data08">
                            <li>반려견과 함께 즐길 수 있는 대형 야외 수영장이 있습니다.</li>
                            <li>운영기간 : 6~9월, 별도 공지</li>
                            <li>이용시간 : 입실시부터 ~ 20:00까지</li>
                            <li>무료이용</li>
                        </ul>
                    </dd>

                    <dt>[ 야외수영장 ]</dt>
                    <dd>
                        <ul class="num" id="sp_data08">
                        <li>찬물로운영/무료이용</li>
                        <li>매년 6~9월까지 운영</li>
                        <li>현재 운영종료</li>
                        </ul>
                    </dd>

                    <dt>[ 애견목욕탕 ]</dt>
                    <dd>
                        <ul class="num" id="sp_data08">
                            <li>직접 목욕을 시키고 드라이 할 수 있는 애견 목욕탕이 준비되어 있습니다.</li>
                            <li>스탠드 드라이기 밑 드라이 룸 구비완료</li>
                            <li>이용시간 : 입실시부터 ~ 20:00까지</li>
                            <li>객실 이용 고객 한마리 무료 / 두마리부터 요금적용</li>
                            <li>소형(6kg 미만) : 주중 6,000 / 주말 7,000</li>
                            <li>중형(6kg~12kg) : 주중 8,000 / 주말 10,000</li>
                            <li>대형(12kg이상) : 주중 10,000 / 주말 15,000</li>
                        </ul>
                    </dd>
                   
                    <dt>[ 애견동반 카페 ]</dt>
                    <dd>
                        <ul class="num" id="sp_data08">
                            <li>애견 동반카페를 운영중이며, 숙박을 하지 않는 고객분들도 이용 가능합니다.</li>
                            <li>카페운영시간 : 10:30 ~ 20:30</li>
                            <li>※펜션의 사정에 따라 운영시간은 변경될 수 있습니다.</li>
                        </ul>
                    </dd>

                    <dt>[ 애견놀이터 ]</dt>
                    <dd>
                        <ul class="num" id="sp_data08">
                            <li>카라반 바로 앞, 반려견들이 뛰어놀 수 있는 대형 애견 놀이터가 준비되어 있습니다.</li>
                            <li>※애견 배변시 수거 필수</li>
                            <li>운영시간 : 10:30 ~ 20:30</li>
                        </ul>
                    </dd>

                    <dt>[ 놀이시설 ]</dt>
                    <dd>
                        <ul class="num" id="sp_data08">
                            <li>아이들과 친구들, 가족과 함께 즐길 수 있는 다양한 오락 시설과 코인 노래방이 구비되어 있습니다.(이용료 유료)</li>
                            <li>노래방~1000원(2곡)</li>
                            <li>농구,펀치~1000원(2회)</li>
                            <li>운영 시간 : 10:30 ~ 20:30</li>
                        </ul>
                    </dd>

                    <dt>[ 불멍(개별) ]</dt>
                    <dd>
                        <ul class="num" id="sp_data08">
                            <li>1회 20,000원 / 장작 1망 추가시 10,000원</li>
                            <li>이용시간 : 18:00 ~ 22:00 / 현장결제</li>
                        </ul>
                    </dd>

                    <dt>[ 캠프파이어 ]</dt>
                    <dd>
                        <ul class="num" id="sp_data08">
                        <li>1회: 20,000원 / 장작 1망 추가시 10,000원</li>
                        <li>이용시간 : 18:00 ~ 22:00 / 현장결제 </li>
                        </ul>
                    </dd>

                    <dt>[ 유의사항 ]</dt>
                    <dd>
                        <ul class="num">                            
                            <li>저희 도그랜드는 전 객실 무료 Wi-fi가 구비되어 있습니다.</li>
                            <li>저희 도그랜드는 애견동반을 함께하므로 저녁 10시부터 매너타임을 시행하고 있습니다.</li>
                            <li>지나친 음주, 고성방가, 음악은 잦은 민원 발생으로 인해 도그랜드에서는 불이행시 불가피하게 퇴실조치할점 양해바랍니다.</li>
                            <li>카라반 내 흡연시 퇴실조치합니다.</li>
                            <li>입실시간은 15시, 퇴실시간은 11시입니다.</li>
                            <li>고객님들의 안락하고 깨끗한 공간제공을 위해 청소 및 정리 시간이 필요하므로, 양해부탁드리며, 시간 엄수부탁드립니다.</li>
                            <li>저희 도그랜드는 고객님들의 편리를 위해 바베큐 숯불과 불멍은 저희가 피워드립니다.</li>
                            <li>개인 캠핑장비는 사용 불가합니다.</li>
                            <li>숙박 외 방문 고객은 추가금액 10,000원 이며, 저녁 10시까지 이용 가능합니다.</li>
                            <li>보호자 동반없는 미성년자는 예약 및 입실 불가합니다.</li>
                            <li>예약시 신청하신 인원이외에 추가인원은 입실이 거부될 수 있습니다.</li>
                            <li>예약인원 초과로 인한 입실 거부시 환불도 되지 않으니 유의하시기 바랍니다.</li>
                            <li>예약후 펜션이나 객실 변경은 해당예약 취소 후 다시 예약하셔야 합니다.</li>
                            <li>예약변경을 위한 취소시에도 취소수수료가 부과되오니 신중하게 예약하시기 바랍니다.</li>
                            <li>퇴실 시에는 내집같이 정돈을 부탁드립니다.</li>
                        </ul>
                    </dd>
                </dl>
            </dd>
        </dl>
    </div>
    <div class="subCon reserCon01">
        <div class="reser01_01">
            <img src="/images/reser/img03.jpg" class="img_100" alt="">
            <h2><dt>환불<strong>기준</strong></dt></h2>
        </div>
        <dl class="reser_dl">
            <dt>환불<strong>기준</strong></dt>
            <dd>
                <ul class="num">
                    <li>올바른 예약문화 정착을 위하여 환불기준을 아래와 같이 운영하고 있사오니 꼭 확인을 하시고 예약하여 주시기 바랍니다.</li>
                    <li>예약 후 날짜변경, 객실변경은 예약을 취소한 후 다시 예약하셔야 합니다.</li>
                    <li>객실선택 및 이용날짜 선택은 신중히 생각하신 후 결정바랍니다.</li>
                    <li>최대인원의 초과는 불가능하며, 기준인원 초과 예약 후 취소 시에는 환불이 되지 않으니 이점 유의바랍니다.</li>
                    <li>환불규정을 읽지 않으시고 생기는 불이익은 책임지지 않습니다.</li>
                    <li>올바른 예약문화를 위해 예약 취소 및 변경시 환불규정을 아래와 같이 운영하고 있습니다.</li>
                </ul>
                <table class="cancelTable">
                    <tbody>
                        <tr>
                            <th>이용일 기준</th>
                            <th>환불액(%)</th>
                        </tr>
                        <tr>
                            <th>10일전 취소 및 변경시</th>
                            <th>전액환불</th>
                        </tr>
                        <tr>
                            <th>9일전 취소 및 변경시</th>
                            <th>90% 환불</th>
                        </tr>
                        <tr>
                            <th>8일전 취소 및 변경시</th>
                            <th>80% 환불</th>
                        </tr>
                        <tr>
                            <th>7일전 취소 및 변경시</th>
                            <th>70% 환불</th>
                        </tr>
                        <tr>
                            <th>6일전 취소 및 변경시</th>
                            <th>60% 환불</th>
                        </tr>
                        <tr>
                            <th>5일전 취소 및 변경시</th>
                            <th>50% 환불</th>
                        </tr>
                        <tr>
                            <th>4일전 취소 및 변경시</th>
                            <th>40% 환불</th>
                        </tr>
                        <tr>
                            <th>3일전 취소 및 변경시</th>
                            <th>30% 환불</th>
                        </tr>
                        <tr>
                            <th>2일전 취소 및 변경시</th>
                            <th>20% 환불</th>
                        </tr>
                        <tr>
                            <th>1일전 취소 및 변경시</th>
                            <th>10% 환불</th>
                        </tr>
                        <tr>
                            <th>이용당일 취소 및 변경시</th>
                            <th>환불불가</th>
                        </tr>								
                    </tbody>
                </table>
            </dd>
        </dl>
    </div>