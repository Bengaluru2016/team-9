package com.team9.villgro;

import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ProgressBar;
import android.widget.TextView;

/**
 * Created by shreya on 9/7/16.
 */
public class MyAdapter extends RecyclerView.Adapter<MyAdapter.ViewHolder> {
        private ItemData[] itemsData;

        public MyAdapter(ItemData[] itemsData) {
            this.itemsData = itemsData;
        }

        // Create new views (invoked by the layout manager)
        @Override
        public MyAdapter.ViewHolder onCreateViewHolder(ViewGroup parent,
                                                       int viewType) {
            // create a new view
            View itemLayoutView = LayoutInflater.from(parent.getContext())
                    .inflate(R.layout.current_tracks_element, null);

            // create ViewHolder

            ViewHolder viewHolder = new ViewHolder(itemLayoutView);
            return viewHolder;
        }

        // Replace the contents of a view (invoked by the layout manager)
        @Override
        public void onBindViewHolder(ViewHolder viewHolder, int position) {

            // - get data from your itemsData at this position
            // - replace the contents of the view with that itemsData

            viewHolder.courseTitle.setText(itemsData[position].getTitle());
            viewHolder.courseDesc.setText(itemsData[position].getDesc());
            viewHolder.progress.setProgress(itemsData[position].getProgress());


        }

        // inner class to hold a reference to each item of RecyclerView
        public static class ViewHolder extends RecyclerView.ViewHolder {

            public TextView courseTitle;
            public TextView courseDesc;
            public ProgressBar progress;

            public ViewHolder(View itemLayoutView) {
                super(itemLayoutView);
                courseTitle = (TextView) itemLayoutView.findViewById(R.id.course_title);
                courseDesc = (TextView) itemLayoutView.findViewById(R.id.course_description);
                progress = (ProgressBar) itemLayoutView.findViewById(R.id.progress);
            }
        }


        // Return the size of your itemsData (invoked by the layout manager)
        @Override
        public int getItemCount() {
            return itemsData.length;
        }

}
