package com.team9.villgro;

/**
 * Created by shreya on 9/7/16.
 */
public class ItemData {


    private String title;
    private String desc;
    private int progress;

    public ItemData(String title,String desc,int progress){

        this.title = title;
        this.desc = desc;
        this.progress = progress;
    }

    public String getTitle() {
        return title;
    }

    public String getDesc() {
        return desc;
    }

    public int getProgress() {
        return progress;
    }
}
