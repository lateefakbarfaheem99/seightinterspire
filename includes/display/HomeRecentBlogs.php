<?php

	CLASS ISC_HOMERECENTBLOGS_PANEL extends PANEL
	{
		public function SetPanelSettings()
		{
			$output = "";

			if(GetConfig('HomeBlogPosts') > 0) {
                // set the news count per page 10
                // and count total page, current page, previous, next pages
                $query = "select count(*) as count  from [|PREFIX|]news where newsvisible='1'";
                $result = $GLOBALS['ISC_CLASS_DB']->Query($query);
                $row = $GLOBALS['ISC_CLASS_DB']->Fetch($result);
                $total_count = intval($row['count']);
                $show_limit = 10;
                if($total_count > 0)
                    $page_count = intval(($total_count-1)/$show_limit)+1;
                else
                    $page_count = 1;
                
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $previous_page = ($current_page == 1) ? 0 : ($current_page-1);
                $next_page = ($current_page == $page_count) ? 0 : ($current_page+1);
                $offset = ($current_page-1)*10;
                
                $query = "select *  from [|PREFIX|]news where newsvisible='1' order by newsdate desc limit ".$offset.", ".$show_limit;
			//	$query .= $GLOBALS['ISC_CLASS_DB']->AddLimit(0, GetConfig('HomeBlogPosts'));
				$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
//=================imran===============================
				if($GLOBALS['ISC_CLASS_DB']->CountResult($result) > 0) {
					while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
                        $GLOBALS['NewsTitle'] = isc_html_escape($row['newstitle']);
                        $GLOBALS['NewsDate'] = CDate($row['newsdate']);
						$GLOBALS['NewsLink'] = BlogLink($row['newsid'], $row['newstitle']);
                        if(!empty($row['short_description']))
						    $GLOBALS['NewsDesc'] = $row['short_description'];
                        else {
                            $news_desc = $row['newscontent'];
                            $news_desc = str_replace('&nbsp;','',strip_tags($news_desc));

                            if(isc_strlen($news_desc) > 497) {
                                $news_desc = isc_substr($news_desc, 0, 497);
                                $news_desc .= "...";
                            }
                            $GLOBALS['NewsDesc'] = $news_desc;
                        }
						$output .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("NewsItem");
					}
                                           
					$GLOBALS['SNIPPETS']['RecentBlogs'] = $output;

                    $slider_url = $GLOBALS['ISC_CFG']['ShopPath']."/custom-cycling-clothing/About-Us/";

                    if($previous_page)
                        $GLOBALS['SNIPPETS']['PreviousBlogs'] = '<a href="'.$GLOBALS['ISC_CFG']['ShopPath'].'/news.php?page='.$previous_page.'" style="float:left"><< Newer Entries</a>';
                    else
                        $GLOBALS['SNIPPETS']['PreviousBlogs'] = "";
                    if($next_page)
                        $GLOBALS['SNIPPETS']['NextBlogs'] = '<a href="'.$GLOBALS['ISC_CFG']['ShopPath'].'/news.php?page='.$next_page.'" style="float:right">Older Entries >></a>';
                    else
                        $GLOBALS['SNIPPETS']['NextBlogs'] = "";

					// Showing the syndication option?
					if(GetConfig('RSSLatestBlogEntries') != 0 && GetConfig('RSSSyndicationIcons') != 0) {
						$GLOBALS['SNIPPETS']['HomeRecentBlogsFeed'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("HomeRecentBlogsFeed");
					}
				}
				else {
					$this->DontDisplay = true;
					$GLOBALS['HideHomeRecentBlogsPanel'] = "none";
				}
			}
			else {
				$this->DontDisplay = true;
				$GLOBALS['HideHomeRecentBlogsPanel'] = "none";
			}		}
	}