var currentLink = null;
            function changeLinkColor(link){
                if(currentLink!=null){
                    currentLink.style.color = link.style.color; //You may put any color you want
                }
                link.style.color = 'red';
                currentLink = link;
            }