/*-----------------------------------------------
|   Generator
-----------------------------------------------*/
const TARGET_SORT_ARRAY = [
  "navigation",
  "header",
  "features",
  "content",
  "team",
  "cta",
  "gallery",
  "forms",
  "partners",
  "testimonials",
  "pricing",
  "contact",
  "footer",
];
const ACTIVE_ITEM = TARGET_SORT_ARRAY[1];

$(document).ready(() => {
  /*-----------------------------------------------
  |   Draggable Container Content
  -----------------------------------------------*/
  const dragableItems = $("#dragable-items");
  let sortableContainerContent = ``;
  const sortableItemHTML = (key) => {
    let n = 1;
    let sortableContainerItemContent = ``;
    while (n <= blocksObject[key]) {
      sortableContainerItemContent += `
        <div class='draggable-item ${
          key === ACTIVE_ITEM ? key : `${key} d-none`
        }'>
          <p class='section-id'>${key}-${n}</p>
          <img src='./assets/img/screenshots/blocks/${key}-${n}.jpg', class='w-100' alt=${key}>
            <div class='btn-group btn-group-action generator-btn-group-action'>
              <a href='blocks/${key}-${n}.html' target='_blank' class='btn btn-secondary btn-xs rounded-start-pill text-nowrap'>
                <span class='fa-solid fa-eye me-2' data-fa-transform='grow-5'></span>
                View
              </a>
              <div class='btn btn-secondary btn-xs rounded-end-pill text-nowrap remove'>
                <span class='fas fa-trash me-2' data-fa-transform='grow-5'></span>
                Remove ${key}-${n++}
              </div>
            </div>
        </div>
      `;
    }
    return sortableContainerItemContent;
  };

  /*-----------------------------------------------
  |   Menu Content
  -----------------------------------------------*/
  // const reducer = (obj) => Object.values(obj).reduce((a, b) => a + b); // Add all values of any object
  const reducerAlternative = (obj, total = 0) => {
    Object.keys(obj).map((key) => (total += blocksObject[key]));
    return total;
  };

  let menuContent = `<a class="d-block mb-4 px-4" href="index.html"><img src="./assets/img/slick-logo.svg" width="40" alt="logo" /></a><div class="menu-item">Show all (${reducerAlternative(
    blocksObject
  )})</div>`;
  const menuItemHTML = (key) =>
    `<div class='menu-item ${
      key === ACTIVE_ITEM ? "active" : ""
    }' data-filter=${key} href='#'>${key} (${blocksObject[key]})</div>`;
  const generatorMenu = $("#generator-menu");

  /*-----------------------------------------------
  |   Populate Sortable and Menu Content and Push
  -----------------------------------------------*/
  TARGET_SORT_ARRAY.map((key) => {
    menuContent += menuItemHTML(key);
    sortableContainerContent += sortableItemHTML(key);
  });
  dragableItems.html(sortableContainerContent);
  generatorMenu.html(menuContent);
  draggableAndSortable();
});

/*-----------------------------------------------
|   Export HTML
-----------------------------------------------*/

$(document).ready(() => {
  const btnView = $("#btn-view");
  const btnCode = $("#btn-code");
  const btnExport = $("#btn-export");
  const btnCopy = $("#btn-copy");
  const btnDownload = $("#btn-download");
  const dropZone = $("#drop-zone");
  const browser = $(".browser");

  const copyToClipboard = (str) => {
    const el = document.createElement("textarea");
    el.value = str;
    document.body.appendChild(el);
    el.select();
    document.execCommand("copy");
    document.body.removeChild(el);
  };

  const splittedLayout = buildingBlocks["layout"].split("</main>");
  // console.log(splittedLayout);
  const html = () => {
    let listOfIds = [];
    // console.log("sdkfjsdk");
    $(dropZone.find("img")).each((index, value) => {
      // console.log({ value });
      listOfIds.push($(value).attr("src").split("blocks/")[1].split(".")[0]);
    });
    // console.log(listOfIds);
    let section = "";
    for (let key in listOfIds) section += buildingBlocks[listOfIds[key++]];
    return {
      sections: section,
      html: `${splittedLayout[0]}${section}</main>${splittedLayout[1]}`,
    };
  };

  btnExport.on("click", () => {
    $("#blocks-stock").html(`
      <pre>
        <code class='language-html'>${escapeHTML(
          html_beautify(html().html, {
            indent_size: 2,
            indent_with_tabs: false,
          })
        )}</code>
      </pre>
    `);
    Prism.highlightAll();
    btnView.removeClass("d-none");
    btnCode.addClass("d-none");
  });

  btnCode.on("click", () => {
    btnView.toggleClass("d-none");
    btnCode.toggleClass("d-none");
    $("#blocks-stock").html(`
      <pre>
        <code class='language-html'>${escapeHTML(
          html_beautify(html().html, {
            indent_size: 2,
            indent_with_tabs: false,
          })
        )}</code>
      </pre>
    `);
    Prism.highlightAll();
  });

  btnView.on("click", () => {
    btnView.toggleClass("d-none");
    btnCode.toggleClass("d-none");
    $("#blocks-stock").html(
      `${html_beautify(html().sections, {
        indent_size: 2,
        indent_with_tabs: false,
      })}`
    );
  });

  /*-----------------------------------------------
  |   Handle Copy Button
  -----------------------------------------------*/
  // Deprecated Event Listener
  // browser.on('DOMSubtreeModified', '#drop-zone', () => {
  //   btnCopy.children('span.text').html('copy');
  //   btnCopy.removeAttr('disabled');
  // });
  // Alternative Approach
  const target = document.getElementById("drop-zone");
  // Create an observer instance
  const observer = new MutationObserver(function (mutations) {
    mutations.forEach(function (mutation) {
      const newNodes = mutation.addedNodes; // DOM NodeList
      if (newNodes !== null) {
        // If there are new nodes added or changed
        btnCopy.children("span.text").html("copy");
        btnCopy.removeAttr("disabled");
      }
    });
  });
  // Configuration of the observer:
  const config = {
    attributes: true,
    childList: true,
    characterData: true,
  };
  // Pass in the target node, as well as the observer options
  observer.observe(target, config);

  btnCopy.on("click", () => {
    btnCopy.children("span.text").html("copied to clipboard");
    btnCopy.children("svg").toggleClass("d-none");
    btnCopy.attr("disabled", true);
    $("#blocks-stock").select();
    copyToClipboard(
      `${html_beautify(html().html, {
        indent_size: 2,
        indent_with_tabs: false,
      })}`
    );
  });

  btnDownload.on("click", () => {
    btnDownload.attr(
      "href",
      `data:text/plain;charset=utf-8, ${encodeURIComponent(
        html_beautify(html().html, {
          indent_size: 2,
          indent_with_tabs: false,
        })
      )}`
    );
    btnDownload.attr("download", `${$("#file-name").val() || "untitled"}.html`);
  });

  /*-----------------------------------------------
  |   Destroy Item
  -----------------------------------------------*/
  browser.on("click", function (e) {
    const clickedDOM = $(e.target);
    if (
      clickedDOM.hasClass("remove") ||
      clickedDOM.parents().hasClass("remove")
    ) {
      clickedDOM.parents(".draggable-item").remove();
      const counter = browser.find(".draggable-item").length;
      counter || dropZone.addClass("browser-intro-text-wrapper");
    }
  });
});

/*-----------------------------------------------
|   Draggable and Sortable
-----------------------------------------------*/
const draggableAndSortable = () => {
  const dropZone = $("#drop-zone");
  const draggableItemsCollection = $(".draggable-item");

  $("#generator-menu").on("click", ".menu-item", function () {
    $(".menu-item").removeClass("active");
    $(this).toggleClass("active");
    const filter = this.dataset.filter || "*";
    const draggableItems = document.getElementById("dragable-items");
    const filteredItems =
      filter !== "*" && draggableItems.querySelectorAll(`.${filter}`);
    const allItems = draggableItems.querySelectorAll(".draggable-item");

    if (filter !== "*") {
      Object.keys(allItems).map((el) => allItems[el].classList.add("d-none"));
      Object.keys(filteredItems).map((el) =>
        filteredItems[el].classList.remove("d-none")
      );
    } else {
      Object.keys(allItems).map((el) =>
        allItems[el].classList.remove("d-none")
      );
    }
  });

  /*-----------------------------------------------
  |   Draggable
  -----------------------------------------------*/
  draggableItemsCollection.each((item, value) => {
    $(value).draggable({
      cancel: "a.ui-icon",
      revert: true,
      helper: "clone",
      cursor: "move",
      revertDuration: 0,
      connectToSortable: "#drop-zone",
      start: function (event, ui) {
        dropZone.removeClass("browser-intro-text-wrapper");
      },
      stop: function (event, ui) {
        $(".ui-draggable-dragging").removeClass("mb-3");
      },
    });
  });

  /*-----------------------------------------------
  |   Sortable
  -----------------------------------------------*/
  dropZone.sortable({
    accept: "#dragable-items .draggable-item",
    activeClass: "ui-state-highlight",
    placeholder: "sort-placer",
    drop: function (event, ui) {
      // clone item to retain in original "list"
      const $item = ui.draggable.clone();
      $(this).addClass("has-drop").html($item);
    },
  });
};

/*-----------------------------------------------
|   Prism Colorization
-----------------------------------------------*/
const escape = document.createElement("textarea");

function escapeHTML(html) {
  escape.textContent = html;
  return escape.innerHTML;
}

/*-----------------------------------------------
|   Alert Window
-----------------------------------------------*/
$(document).ready(() => {
  const warning = () => {
    if (window.location.href.includes("file://"))
      return `<h2 class='color-white mb-0'>Bummer! We need http/https protocol to run the system.</h2><a href="https://prium.github.io/slick/generator.html" class="btn btn-white mt-6">Please Use the online Generator</a>`;
    if (window.is.ie())
      return `<h2 class='color-white mb-0'>Generator does not support Internet Explorer.</h2>`;
    if (window.is.mobile())
      return `<h2 class='color-white mb-0'>Generator isn't available in this device! Please try with your computer.</h2>`;
    return `<h2 class='color-white mb-0'>Please try with larger screen.</h2>`;
  };
  $("body").append(`<div class='alert-window p-4 p-sm-6'>${warning()}</div>`);
  const rem2px = (rem) =>
    rem *
    window
      .getComputedStyle(document.body, null)
      .getPropertyValue("font-size")
      .split("px")[0];
  const checkValidity = () => {
    $(".nano-content").css({ height: $(window).height() });
    const alertWindow = $(".alert-window");
    const main = $("main");
    if (
      window.location.href.includes("file://") ||
      window.is.mobile() ||
      window.is.ie() ||
      $(window).width() < rem2px(66)
    ) {
      alertWindow.addClass("d-flex");
      alertWindow.removeClass("d-none");
      main.addClass("d-none");
    } else {
      alertWindow.addClass("d-none");
      alertWindow.removeClass("d-flex");
      main.removeClass("d-none");
    }
  };

  checkValidity();
  $(window).on("resize", () => {
    checkValidity();
  });
});
