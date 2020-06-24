                    <!-- ============================================================== -->
                    <!-- timeline  -->
                    <!-- ============================================================== -->
                
                    <section class="cd-timeline js-cd-timeline">
                        <div class="cd-timeline__container" id="alarmReal">
                            <!-- cd-timeline__block -->
                            @foreach($alarm as $a)
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                                    <img src="{{ asset('svg/alarm.svg') }}" alt="Movie" width="40px" height="40px">
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>Alarm 1</h3>
                                    <p>Alarm ON : {{ $a->time }}</p>
                                    <p>Status : {{ \App\Log_alert::where('monitoring_id', $a->id_monitoring)->first()->status }}</p>
                                    <p>Keterangan : {{ \App\Log_alert::where('monitoring_id', $a->id_monitoring)->first()->keterangan }}</p>
                                    <span class="cd-timeline__date">{{ $a->date }}</span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- cd-timeline -->
               
                  <!-- ============================================================== -->
                    <!-- end timeline  -->
                    <!-- ============================================================== -->