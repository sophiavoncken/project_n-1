async function acessa_api() {
    const res = await fetch("https://libretranslate.com/translate", {
        method: "POST",
        body: JSON.stringify({
            q: "Translation Formula's Test",
            source: "auto",
            target: "pt",
            format: "text",
            api_key: ""
        }),
        headers: { "Content-Type": "application/json" }
    });
    //console.log(await res.json());
    document.getElementById("div_retorno").innerHTML = (await res.text());    
}
acessa_api();    