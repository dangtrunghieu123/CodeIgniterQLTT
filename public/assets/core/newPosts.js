var posts = {
    options:[],
    element: $(".App-container"),
    onInit: function(){
        let fastGrid = $("<div>").addClass("FastGrid").css({'margin-top': '614px', 'width': '1264px'}).appendTo(this.element);
        let col = [
            $("<div class='Grid-column'>"),
            $("<div class='Grid-column hasMargin'>").css({"width": "240px"}),
            $("<div class='Grid-column hasMargin'>").css({"width": "240px"}),
            $("<div class='Grid-column hasMargin'>").css({"width": "240px"}),
            $("<div class='Grid-column hasMargin'>").css({"width": "240px"})
        ];
        col.forEach(value =>{
            value.appendTo(this.element);
        });
        while(this.options.length > 0){
            col.forEach(value =>{
                if(this.options.length == 0){
                    return;
                }
                
                let dt = this.options.pop();
                let div = $("<div style='margin-bottom: 16px;'>");
                let a = $("<a class='Post-item novote'>")
                    .attr({"href":"#","target":"_self"})
                    .appendTo(div)
                    ;
                let image = dt.image.link;
                if(dt.image.type.startsWith("image")){
                    var img = $("<img>")
                    .attr({"src":image + "?maxwidth=520&shape=thumb&fidelity=high"})
                    .css({"width": "240px"})
                }
                else{
                    var img = $('<video autoplay type="video/mp4" style="width: 240px; height: auto;">').attr({"src":dt.image.link});
                }
                let content = $("<div>")
                    .addClass("Post-item-media")
                    .css({"height": "auto","margin-bottom":"67px"})
                    .append(img)
                    .appendTo(a);
                let title = $("<div class='Post-item-title'>")
                                .append(
                                    $('<span style="display: -webkit-box; max-height: 31.92px; overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">')
                                    .html(dt.title || "")
                                )
                                ;
                let info = $("<div class='Post-item-info'>")
                let span = $("<span>");
                let vote = $("<div class='PostInfo vote ups uScaleTransition'>")
                    .append(
                        $("<span class='icon icon-upvote-fill'>")
                    )
                    .append(
                        $("<span>").html(25)
                    )
                    .appendTo(info)
                    ;
                
                let comment = $("<div class='PostInfo uScaleTransition'>")
                        .append(
                            $("<span class='icon chat-filled'>")
                            .append(
                                $('<img class="chat-filled" src="https://s.imgur.com/desktop-assets/desktop-assets/icon-chat-filled.3b404508884baceb3ae6a6f72eb0fd0d.svg">')
                            )
                        )
                        .append($("<span>").html(61))
                        .appendTo(info)
                        ;

                let view = $("<div class='PostInfo uScaleTransition views '>")
                    .append(
                        span.addClass("icon eye")
                            .append(
                                $('<img class="eye" src="https://s.imgur.com/desktop-assets/desktop-assets/icon-eye.d81b8d844b1ebed233fc4cd2b4804ea1.svg">')
                            )
                        )
                    .append(span.html("49k"))
                    .appendTo(info)
                    ;

                $("<div class='Post-item-title-wrap'>")
                    .append(title)
                    .append(info)
                    .appendTo(a)
                    ;
                    
                value.append(div);
            });
        }
    }
}
posts.options = data._posts.data.map(value =>{
    if(!value.images){
        value.images = [{
            link: value.link,
            height: value.height,
            type: value.type
        }];
    }
    return {
        title: value.title,
        views: value.views,
        image: value.images[0],
        comment_count: value.comment_count,
        favorite_count: value.favorite_count,
        tag: value.tags,
        ups: value.ups
    }
})
posts.onInit();