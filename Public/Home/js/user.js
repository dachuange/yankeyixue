/**个人中心切换**/
	 		oDiv=document.getElementById("user_wrap");
			aBtn=document.getElementsByClassName("user_navli");
			aDiv=document.getElementsByClassName("user_navmain");
			for(i=0;i<aBtn.length;i++)
			{
				aBtn[i].index=i;
				aBtn[i].onclick=function()
				{
					for(var i=0;i<aBtn.length;i++)
					{
						aBtn[i].className='user_navli';
						aDiv[i].style.display='none';
					}
					this.className='user_navli active';
					aDiv[this.index].style.display='block';
				}
				
			}	


