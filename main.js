let slideshowImg = ".slideshow-img";

$(function () {
  $(".slideshow").each(function () {
    // スライド（画像）の数を取得
    let $slides = $(this).find("img"),
      slideNum = $slides.length,
      currentIdx = 0; // 何番目か
    // 最初の画像をフェードイン
    $(slideshowImg).eq(currentIdx).fadeIn();
    // ○秒後に次のスライドを表示
    setInterval(dispNextSlide, 3000);
    // 次のスライドを表示するメソッド
    function dispNextSlide() {
      let nextIdx = currentIdx + 1;
      // 最後のスライドの場合ははじめに戻る
      if (nextIdx > slideNum - 1) {
        nextIdx = 0;
      }
      // 現在のスライドをフェードアウト
      $(slideshowImg).eq(currentIdx).fadeOut();
      // 次のスライドをフェードイン
      $(slideshowImg).eq(nextIdx).fadeIn();
      // インデックスを更新
      currentIdx = nextIdx;
    }
  });
});

// ハンバーガーメニュー
let navMenu = ".nav-menu";
$(navMenu).on("click", function () {
  $(".nav-menu, .nav, .nav2").toggleClass("show");
});

$('a[href^="#"]').on("click", function () {
  $(navMenu).click(); // navMenuをクリックした時と同じ処理
});

// start
$(function () {
  setTimeout(function () {
    $(".start-txt").fadeIn(1600);
  }, 500);
  setTimeout(function () {
    $(".start").fadeOut(1000);
  }, 2000);
});

// slide

$(".slide").each(function () {
  //一文字ずつ<span>で括る
  $(this)
    .children()
    .addBack()
    .contents()
    .each(function () {
      if (this.nodeType == 3) {
        $(this).replaceWith($(this).text().replace(/(\S)/g, "<span>$1</span>"));
      }
    });

  // スクロールしたら要素がフェードイン
  $(function () {
    $(window).scroll(function () {
      $(".fadein").each(function () {
        let elemPos = $(this).offset().top;
        let scroll = $(window).scrollTop();
        let windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 300) {
          $(this).addClass("scrollin");
        }
      });
    });
  });

  //inviewを使って画面に表れたら起動させる
  $(this).on("inview", function () {
    //一文字ずつ順番に不透明させる
    $(this).css({ opacity: 1 });
    for (var i = 0; i <= $(this).children("span").length; i++) {
      $(this)
        .children("span")
        .eq(i)
        .delay(100 * i)
        .animate({ opacity: 1 }, 500);
    }
  });
});

// back-to-top

let btt = $("#back-to-top");

$(window).scroll(function () {
  if ($(window).scrollTop() > $(window).height()) {
    btt.addClass("in");
  } else {
    btt.removeClass("in");
  }
});

btt.click(function () {
  $("html,body").animate(
    {
      scrollTop: 0,
    },
    500
  );
});

// about

let about = ".about";

$(function () {
  //事前に要素のopacityを0(= 透明度100%)にしておく
  $(about).css("opacity", 0);

  //要素が画面に入ったらopacityを1(= 透明度0%・不透明)にして表示する
  $(about).on("inview", function (event, isInView) {
    if (isInView) {
      $(this).animate(
        {
          opacity: 1.0,
        },
        1000
      );
    }
  });
});
