<?php

class IndexAction extends Action 
{
    public function verify()
    {    
        import('ORG.Util.Image');
        Image::buildImageVerify(4,5,'png');
    }
    public function index()
    {

        // import('ORG.Util.Page');
        // $unreadMessageT = M('unreadmessage'); 
        //     $unreadCount = $unreadMessageT->count();

        //     $Page1       = new Page($unreadCount,5);
        //     $show1       = $Page1->show();
            
        //     $list = $unreadMessageT->limit($Page1->firstRow.','.$Page1->listRows)->select();
        //     $this->assign('list',$list);// 赋值数据集
        //     $this->assign('page1',$show1);// 赋值分页输出
   
		$this->display();

    }
    public function loginPage()
    {
    	$this->display('login');
    }
    public function registPage()
    {
    	$this->display('regist');
    }
    public function findPwdPage()
    {
        $this->display('findPwd');
    }

   public function resetPwd()
    {

        cookie('mail',I('get.mail'));

        $mail = I('get.mail');
        $token = I('get.token');
        $condition['mail']= $mail;
        

        $manageFind = M('manager')->where($condition)->find();
        $userFind = M('user')->where($condition)->find();
        if($manageFind)
        {
            $manageResult = M('manager')->where($condition)->select();
            //$manageResult2 = $manageResult[0];
            if($token == md5($manageResult['username'].$manageResult['password'].$manageResult['mail']))
            {
                 $this->display('password_reset');
                 die;
                
            }
            
        }
        else if($userFind)
        {
            $userResult = M('user')->where($condition)->select();
           // $userResult2 = $userResult[0];
            if($token == md5($userResult2['username'].$userResult['password'].$userResult['mail']))
            {
                 $this->display('password_reset');
                 die;
                
            }
              
        }
        else
        {
            $this->error('请重新发送',findPwdPage);
        }
        

        // $this->display('test');


    }

    public function advicePage()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('advice');
        }
    }
    
    public function manageAdvicePage()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('manageAdvicePage');
        }
    }
    public function manageAngleAdvice()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('manageAngleAdvice');
        }
        
    }
    public function manageLoveTeachAdvice()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
             $this->display('manageLoveTeachAdvice');
        }
      
    }
    public function manageNationalVolunteerAdvice()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('manageNationalVolunteerAdvice');
        }
        
    }
    public function manageAboutPage()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('manageAboutPage');  
        }
    }



    public function angleAdvice()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('angleAdvice');
        }
        
    }
    public function loveTeachAdvice()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('loveTeach');
        }
        
    }
    public function nationalVolunteerAdvice()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('nationalVolunteerAdvice');
        }
        
    }
    public function managePage()
    {

        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            import('ORG.Util.Page');

            // 未读消息分页
            $unreadMessageT = M('unreadmessage'); 
            $unreadCount = $unreadMessageT->count();

            $Page1       = new Page($unreadCount,8);
            $show1       = $Page1->show();
            
            $unreadInfo = $unreadMessageT->limit($Page1->firstRow.','.$Page1->listRows)->select();
            $this->assign('unreadInfo',$unreadInfo);
            $this->assign('page1',$show1);



            // 已读消息分页

            $readmessageT = M('readmessage');
            $readCount = $readmessageT->count();
            $Page2       = new Page($readCount,8);
            $show2       = $Page2->show();
            // 进行分页数据查询
            $readmessageInfo = $readmessageT->limit($Page2->firstRow.','.$Page2->listRows)->select();
            $this->assign('readmessageInfo',$readmessageInfo);
            $this->assign('page2',$show2);


            cookie('unreadCount',$unreadCount);
            cookie('readCount',$readCount);


            // 用户分页
            $userT = M('user');
            $userCount = $userT->count();
            $Page3       = new Page($userCount,8);
            $show3       = $Page3->show();
          
            $userInfo = $userT->limit($Page3->firstRow.','.$Page3->listRows)->select();
            $this->assign('userInfo',$userInfo);
            $this->assign('page3',$show3);


            // 黑名单分页

            $blacklistT = M('blacklist');
            $blackCount = $blacklistT->count();
            $Page4       = new Page($blackCount,8);
            $show4       = $Page4->show();
            $blacklistInfo = $blacklistT->limit($Page4->firstRow.','.$Page4->listRows)->select();
            $this->assign('blacklistInfo',$blacklistInfo);
            $this->assign('page4',$show4);




            // 已发布活动分页
            $activityT = M('activity');
            $activityCount = $activityT->count();
            $Page5       = new Page($activityCount,8);
            $show5       = $Page5->show();
            $activityInfo = $activityT->limit($Page5->firstRow.','.$Page5->listRows)->select();
            $this->assign('activityInfo',$activityInfo);
            $this->assign('page5',$show5);



            //用户报名活动分页
            $useractivityT = M('useractivity');
            $useractivityCount = $useractivityT->count();
            $Page6       = new Page($useractivityCount,8);
            $show6       = $Page6->show();
            $useractivityInfo = $useractivityT->limit($Page6->firstRow.','.$Page6->listRows)->select();
            $this->assign('useractivityInfo',$useractivityInfo);
            $this->assign('page6',$show6);



            $this->display('manage');

        }
        
    }
    public function manageIndexPage()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('manageIndexPage');
        }
        
    }
    public function indexPage()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('indexPage');
        }
        
    }
    public function aboutPage()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('about');
        }
        
    }
    public function userInfo()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $condition['username'] = $_COOKIE['username'];
            $userInfo = M('user')->where($condition)->select();
            $this->assign('userInfo',$userInfo);
            $this->display('userInfo');
        }
        
    }
    public function manageInfo()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $condition['username'] = $_COOKIE['username'];
            $managerInfo = M('manager')->where($condition)->select();
            $this->assign('managerInfo',$managerInfo);
            
            $this->display('manageInfo');
        }
        
    }

    public function showA()
    {
        $this->display('show');
    }

    public function userPwdChange()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('changePwd');
        }
        
    }
    public function managerChangePwdPage()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('manageChangePwd');
        }
        
    }

    public function userChangePwdSuccess()
    {
        $this->success('密码修改成功',indexPage);
    }
     public function managerPwdSuccess()
    {
        $this->success('密码修改成功',manageIndexPage);
    }

    public function pwdResetSuccess()
    {
        $condition['mail'] = $_COOKIE['mail'];

        if(M('manager')->where($condition)->find())
        {
            $managerR = M('manager')->where($condition)->select();
            $managerR2 = $managerR[0];
            cookie('username',$managerR2['username']);
            $this->success('密码重置成功',manageIndexPage);
            die;
        }
        else 
        {
            $managerR3 = M('user')->where($condition)->select();
            $managerR4 = $managerR3[0];
            cookie('username',$managerR4['username']);
            $this->success('密码重置成功',indexPage);
           
        }
        
    }


    public function manageActivity()
    {
        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            $this->display('manageActivity');
        }
        
    }
    public function userActivity()
    {

        if(empty($_COOKIE['username']))
        {
            $this->error('请先登录',loginPage);
        }
        else
        {
            
            $condition['username'] = $_COOKIE['username'];

            

            $A=M("useractivity");
            $subQuery = $A->field('aname')->where($condition)->buildSql();
            $S=M("activity");
            $userNotSelect = $S->where('aname not in '.$subQuery)->select();

            $userSelect = $A->where($condition)->select();
            $activityAll = $S->select();

            $this->assign('userSelect',$userSelect);
            $this->assign('userNotSelect',$userNotSelect);
            $this->assign('activityAll',$activityAll);

            $this->display('userActivity');
        }
        
    }
}