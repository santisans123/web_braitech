
   @extends('test')

   @section('content')
   <!--
    page header - start
    -->
        <div class="page-header">
            <div class="page-header-wrapper">
                <div class="background-pattern background-pattern-2">
                    <div class="background-pattern-img background-loop" style="background-image: url(assets/images/patterns/pattern.jpg);"></div>
                    <div class="background-pattern-gradient"></div>
                    <div class="background-pattern-bottom">
                        <div class="image" style="background-image: url(assets/images/patterns/pattern-2.jpg)"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--
    page header - end
    -->
        <form action="/tts" method="POST">
            @csrf
            <div id="container">
                <div id="txt" name="txt">
                    @foreach ($results as $key=>$result)
                        {{ $result['keyboard'] }}
                    @endforeach
                </div>
            </div>
            <div id="player" ></div>
            <div style="text-align: center">
                <button name="submit" class="button button-premium" id="play"  onclick="getAudio()" >
                    <div class="button-inner">
                        <div class="button-content">
                            <i class="fas fa-play"></i>
                            <h4> Baca Teks</h4>
                        </div>
                    </div>
                </button>
                <a href="/employee/pdf" class="button button-premium" style="margin-left: 20px;">
                    <div class="button-inner">
                        <div class="button-content">
                            <i class="fas fa-file-pdf"></i>
                            <h4> Download PDF</h4>
                        </div>
                    </div>
                </a>
            </div>
        </form>
@endsection