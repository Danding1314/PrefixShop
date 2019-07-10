<?php
namespace prefix;

use pocketmine\command\{Command, CommandSender};
use pocketmine\plugin\PluginBase;
use pocketmine\level\Level;
use pocketmine\event\Listener;
use pocketmine\level\sound\AnvilUseSound;
use pocketmine\{Server, Player};
use onebone\economyapi\EconomyAPI;

class Main extends PluginBase implements Listener{

	public function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);	
        $this->getLogger()->info("稱號商店已經加載");
		}

	    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
		switch ($command->getName()) {
 			   case "prefix":
				if (isset($args[0]) == false){										
				   return true;
				   break;
			}
			    switch($args[0]){
					
               case "1": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "平民百姓";
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 平民百姓");
			   return true;  
			  }

               case "2": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "民以食為天";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 民以食為天");
			   return true;  
			  }
			  			  
               case "3": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "時空の旅人";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 時空の旅人");
			   return true;  
			  }
			  

               case "4": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "創造無限の可能";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 創造無限の可能");
			   return true;  
			  }
			  

               case "5": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "天與地的融合";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 天與地的融合");
			   return true;  
			  }
			  

               case "6": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "歐洲人";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 歐洲人");
			   return true;  
			  }
		
               case "7": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "非洲人";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 非洲人");
			   return true;  
			  }

               case "8": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "疾風神射手";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 疾風神射手");
			   return true;  
			  }

               case "9": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "合作射店員";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 合作射店員");
			   return true;  
			  }

               case "10": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "合作射阿姨";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 合作射阿姨");
			   return true;  
			  }

               case "11": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "Killer";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 10000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 10000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - Killer");
			   return true;  
			  }		

               case "12": 
               $pm = EconomyAPI::getInstance()->myMoney($sender);
               $pc = $this->getServer()->getPluginManager()->getPlugin("PureChat");	
               $prefix = "風城載我！";
			   
			   $name = $sender->getName();
			   
			   if ($pm < 5000){
			   $sender->addTitle("餘額不足");
               return true;
			   }else{
               EconomyAPI::getInstance()->reduceMoney($sender, 5000);
			   $pc->setPrefix($prefix, $sender);
               $sender->getLevel()->addSound(new AnvilUseSound($sender->getLocation()));						   
               $sender->addTitle("購買 稱號 - 風城載我！");
			   return true;
			     }
			   }
			}
		}				
		
	public function onDisable() : void{
        $this->getLogger()->info("稱號商店已經卸載");
	  }
}		